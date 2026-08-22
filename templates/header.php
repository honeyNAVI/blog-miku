<?php
    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog da Princesa número 1</title>
    <!-- ESTILO DO PROJETO -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- GOOGLE FONTS -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/MIKUMIKU.gif" alt="Blog da Princesa N 1">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">World Is Mine!</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>/lore.php" class="nav-link">O que é Hatsune Miku?</a></li>
            </ul>
        </nav>
    </header>
    
