<?php
$uploadDir = "images/";
$pictureList = array_slice(scandir($uploadDir), 2); ?>
<div class="d-flex flex-wrap justify-content-center align-items-center mt-5">
    <?php foreach ($pictureList as $picture) : ?>

        <div class="d-flex flex-column align-items-center pr-5 mb-5">
            <img src="<?= $uploadDir . $picture ?>" class="img-fluid rounded border border-dark" width=300px alt="Responsive image">
            <p class="font-italic"> <?= $uploadDir . $picture ?></p>
            <a href="delete.php?picture=<?= $uploadDir . $picture ?>"><button class="rounded"> Supprimer </button></a>
        </div>
    <?php endforeach; ?>
</div>