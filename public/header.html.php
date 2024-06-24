<!DOCTYPE html>
<!-- https://www.php.net/manual/fr/reserved.variables.server.php -->
<!-- basename est une fonction de php — Retourne le nom de la composante finale d'un chemin -->
<!-- https://www.php.net/manual/fr/function.basename.php -->
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";
// var_dump($activePage) 
?>
<html lang="fr">

<head>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <base href="http://localhost/projet_html_php/">
    <link rel="stylesheet" href="public/assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phase2</title>
</head>

<body>
    <header>
        <!--Zone du haut, exp : bannière, logo, slogan ...-->
        <div id="logo">
            <a href="#logo">
                <button type="button">
                    <i class="fas fa-arrow-circle-up"></i>
                </button>
            </a>
            <img src="public/assets/img/logo.png" alt="logo">
        </div>

        <div id="slogan">
            <h1>Mon premier site en HTML/CSS</h1>
        </div>

        <div id="social">
            <a href="https://www.instagram.com" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/" target="_blank">
                <i class="fa-brands fa-square-facebook"></i>
            </a>
        </div>
        <div class="clear"></div>
    </header>

    <?php require "nav.html.php"; ?>