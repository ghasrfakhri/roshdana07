<?php
session_start();
$_SESSION['captcha_code'] = $code = rand(10000, 99999)

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Name: <input type="text"><br>
    description <input type="text"><br>
    <img src="img.php">
    Captcha: <input type="text" name="captcha"><br>
    <input type="submit">
</form>

</body>
</html>