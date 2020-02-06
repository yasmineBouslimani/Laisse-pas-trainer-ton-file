<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laisse pas trainer ton file</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<form action="traitement.php" method="post" enctype="multipart/form-data">
    <input type="file" id="file" name="fichier[]" multiple="multiple">
    <input type="submit" value="Send" name="submit" />
</form>



<div class="container">
    <div class="contr"><h2>Glissez - déposez vos fichiers dans la «&#160;zone de drop&#160;» (maximum cinq fichiers - taille maximale par fichier 256&#160;kb)</h2></div>
    <div class="upload_form_cont">
        <div id="dropArea">Zone de drop</div>
        <div class="info">
            <div>Fichiers restants : <span id="count">0</span></div>
            <div>URL de destination : <input id="url" value="http://www.script-tutorials.com/demos/257/upload.php"/></div>
            <h2>Résultat :</h2>
            <div id="result"></div>
            <canvas width="500" height="20"></canvas>
        </div>
    </div>
</div>
<script src="script.js"></script>


</body>
</html>
