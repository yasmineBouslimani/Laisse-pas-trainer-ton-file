<?php
// définition des constantes
    $uploadDir = "images/";
    $legalExtensions = array("JPG", "PNG", "GIF");
    $legalSize = 1000000; // 1 000 000 Octets = 1 MO

if (isset($_POST['submit'])) {
        for ($i = 0; $i < count($_FILES['fichier']['name']); $i++) {
            $actualName = $_FILES['fichier']['tmp_name'][$i];
            $actualSize = $_FILES['fichier']['size'][$i];
            $extension = pathinfo($_FILES['fichier']['name'][$i], PATHINFO_EXTENSION);
            $newName = $_FILES['fichier']['name'][$i];
            $destination = "images/" . uniqid("image") . "." . $extension;
                if ($actualSize < $legalSize) {
                    move_uploaded_file($actualName, $destination); //Upload
                }
        }
}
$images = new FilesystemIterator($uploadDir);
if (!empty($_POST['delete'])) {
    unlink($_POST['delete']);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des images</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Images uploadés</h2>
<div class="row">
    <?php foreach ($images as $image) { ?>
        <div class="col-4">
            <div class="imag">
                <img src="images/<?= $image->getFilename(); ?>" alt="..." class="img-thumbnail">
            </div>
            <div class="imag-name">
                <form action="#" method="post">
                    <?= $image->getFilename(); ?>
                    <input type="hidden" value="images/<?= $image->getFilename(); ?>" id="delete" name="delete">
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
</body>
</html>