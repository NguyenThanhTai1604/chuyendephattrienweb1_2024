<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

function decodeId($id)
{
    return base64_decode($id);
}

if (!empty($_GET['id'])) {
    $endcodeId =  $_GET['id'];
    $id = decodeId($endcodeId);

    if (!empty($id) && is_numeric($id)) {
        $userModel->deleteUserById($id);
    }
}
header('location: list_users.php');
