<?php
    include_once('helpers/url.php');
    include_once('data/posts.php');
    include_once('data/categories.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css ">
    <title>Careers Blog</title>
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>">
            <img id="logo" src="<?= $BASE_URL ?>/img/logo.png" alt="Carreiras Blog">
        </a>
        <nav>
            <ul id="navbar">
                <li><a class="navbar-link" href="<?= $BASE_URL ?>">Home</a></li>
                <li><a class="navbar-link" href="#">Categorias</a></li>
                <li><a class="navbar-link" href="#">Sobre</a></li>
                <li><a class="navbar-link" href="<?= $BASE_URL ?>contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>
</body>