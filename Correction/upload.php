<?php


if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $files = $_FILES['files'];
    $allowedType = ["jpg", "jpeg", "png", "gif"];
    $uploadDir = 'images/';
    foreach ($files['name'] as $key => $filename) {

        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $uploadFile = $uploadDir . "image" . uniqid() . "." . $extension;
        if (in_array($extension, $allowedType) && $files['size'][$key] < 1000 * 1000) {
            move_uploaded_file($files['tmp_name'][$key], $uploadFile);
            header("Location:index.php");
        } else {
            $error = "FAIIIIL";
            header("Location:index.php");
        }
    }
}
