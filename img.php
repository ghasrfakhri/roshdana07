<?php
session_start();
$code = $_SESSION['captcha_code'];

$image = imagecreate(200, 70);

$c1 = imagecolorallocate($image, 255, 255, 255);
$c2 = imagecolorallocate($image, 0, 0, 0);


imageline($image, 0, 0, 199, 69, $c2);
for ($i = 0; $i < 5; $i++) {
    $c3 = imagecolorallocate($image, rand(0, 200), rand(150, 255), rand(0, 255));

    imagestring($image, 5, 10 + ($i * 30), rand(1, 10) * 5, substr($code,$i, 1), $c3);

}


header("Content-Type: image/jpeg");
imagejpeg($image);