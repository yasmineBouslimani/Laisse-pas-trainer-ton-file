<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laisse pas trainer ton file</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css"/>
</head>
<body>
<form action="traitement.php" method="post" enctype="multipart/form-data">
    <input type="file" id="file" name="fichier[]" multiple="multiple">
    <input type="submit" value="Send" name="submit" />
</form>
</body>
</html>
