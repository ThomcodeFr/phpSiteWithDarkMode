<?php
require_once("cookies.php"); //evite l'erreur de multiple déclaration de variable

if (isset($_GET['theme'])) {
    retourcookieCss($_GET['theme']);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Site avec Dark Mode</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Dark/Light Mode -->
    <?php $theme = fichiersCSSThemes(); ?>
    <link rel="stylesheet" type="text/css" href="<?= $theme ?>">
</head>