<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3050">


    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">

                <h1 class="title">SEND MESSAGE</h1>
                <p>If you are facing any problems with your device and want us to fix it. Find us on social networks.</p>
                <div class="social-icons">
                    <a href="#" class="social-icon facebook"><i class="fa fa-facebook-official"></i></a>
                    <a href="#" class="social-icon twitter"><i class="fa fa-twitter-square"></i></a>
                    <a href="#" class="social-icon instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="social-icon youtube"><i class="fa fa-youtube-play"></i></a>
                </div>
                <p>Or please call us at...</p>
                <div class="phone-number my-3">
                    <i class="bi bi-telephone-fill icon-phone"></i>
                    <span class="text-danger">1 625 457 9820</span>
                </div>


            </div>

            <div class="col-md-6">
                <form class="contact-form mt-4">
                    <div class="form-group mb-4">
                        <input type="text" id="name" class="form-input" placeholder="Your Name">
                    </div>
                    <div class="form-group mb-4">
                        <input type="email" id="email" class="form-input" placeholder="Your Email">
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class=" form-input" placeholder="Your Subject">
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-input" rows="10" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn-send">Send</button>
                </form>
            </div>
        </div>
    </div>


</div>