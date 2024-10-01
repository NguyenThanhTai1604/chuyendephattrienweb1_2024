<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;

function decodeId($id)
{
    return base64_decode($id);
}

function validateName($name)
{
    if (empty($name)) {
        return "Name không được để trống";
    }

    if (!preg_match("/^[a-zA-Z0-9]{5,15}$/", $name)) {
        return "Name phải có độ dài từ 5 -> 15 ký tự và chỉ chứa các ký tự A-Z, a-z, 0-9";
    }

    return true;
}

function validatePassword($password)
{
    if (empty($password)) {
        return "Password không được để trống.";
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/", $password)) {
        return "Passwords phải có độ dài từ 5 -> 15 ký tự và bao gồm chữ thương a-z, chữ HOA A-Z, số 0-9, và ký tự đặc biệt";
    }

    return true;
}

if (!empty($_GET['id'])) {
    $_id = decodeId($_GET['id']);
    $user = $userModel->findUserById($_id); //Update existing user
}




$msg = '';

if (!empty($_POST['submit'])) {
    $validateNameResult = validateName($_POST['name']);
    $validatePasswordResult = validatePassword($_POST['password']);

    if ($validateNameResult !== true) {
        $msg = "Lỗi name: " . $validateNameResult;
    } elseif ($validatePasswordResult !== true) {
        $msg = "Lỗi password: " . $validatePasswordResult;
    } else {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }

        header('Location: list_users.php');
        exit;
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php
            if (!empty($msg)) {
                echo "<div class='alert alert-danger'>$msg</div>";
            }
            ?>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>

</html>