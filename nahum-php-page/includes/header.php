<?php include 'portal-config.php';?>
<!DOCTYPE html>
<html lang="en">
 <head>
 <title>Nahum Yanez</title>
     <title><?=$title?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/forms.css">
        <link rel="stylesheet" href="css/recaptcha-styles.css">
 </head>
 <body>
        <header>
            <h1><strong>Nahum Yanez</strong></h1>
            <h1><i class="logo fa <?=$logo?>"></i></h1>
            <nav class="topnav" id="myTopnav">
                <!--
                <a href="index.php" class="active">Home</a>
                <a href="#" target="_blank">Name of project goes here</a>
                <a href="contact.php" target="_blank">Contact</a>
                -->
                <a href="https://nahyan.dreamhosters.com/nahum-php-page/index.php" class="active">Home</a>
                <a href="https://nahyan.dreamhosters.com/nahum-php-page/about.php" target="_blank">About</a>
                <a href="https://nahyan.dreamhosters.com/nahum-php-page/gallery.php" target="_blank">Gallery</a>
                <a href="https://nahyan.dreamhosters.com/nahum-php-page/services.php" target="_blank">Sevices</a>
                <a href="https://nahyan.dreamhosters.com/nahum-php-page/github.php" target="_blank">GitHub</a>
                <!--<a href="https://nahyan.dreamhosters.com/nahum-php-page/linkin.php" target="_blank">LinkedIn</a>-->
                <a href="https://nahyan.dreamhosters.com/nahum-php-page/contact.php" target="_blank">Contact</a>
                <!--<a href="#" target="_blank">Portfolio</a>--> 
                <!-- Portfolio.php linkes from portal-config.php-->
            <?=makeLinks($nav1)?>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </nav>
     </header>
     
   <main class="wrapper">
        <h2 class="subheader"><?=$title?><?=$PageID?> </h2>
        <!-- header ends here -->
