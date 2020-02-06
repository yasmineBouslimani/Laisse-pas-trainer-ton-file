<?php

$picture = $_GET['picture'];

if (file_exists($uploadDir . $picture)) {
    unlink($uploadDir . $picture);
    header('Location: index.php');
}