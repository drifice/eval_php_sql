<?php
require 'method.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label> Nom : 
    <input type="text" name="nom">
    </label>
    <label> Race : 
    <input type="text" name="race">
    </label>
    <input type="submit" value="Ajouter">
</form>
    <ul>
    <?php 
        foreach ($table as $key => $value) { ?>
            <li>
                <p> 
                Nom :<?= $value->nom ?>
                Race :<?= $value->race ?>
                <p> 
            </li>
    <?php } ?>
</ul>
</body>
</html>
