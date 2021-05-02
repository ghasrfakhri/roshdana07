<?php

if (isset($_FILES['myfile']) && $_FILES['myfile']['error'] == UPLOAD_ERR_OK) {
//    $ext = substr($_FILES['myfile']['name'], strrpos($_FILES['myfile']['name'], '.'));
    $arr = explode('.', $_FILES['myfile']['name']);
    $ext = $arr[count($arr) - 1];
    $filename = uniqid("upload_") . "." . $ext;
    if (in_array($ext, ['jpg', 'jpeg'])) {
        move_uploaded_file($_FILES['myfile']['tmp_name'], "upload/" . $filename);
    } else {
        echo "Ext Not supported";
    }

}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">

    <input type="submit" value="Upload File">
</form>
</body>
</html>
