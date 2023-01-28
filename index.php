<?php
include '../php/conneciton.php';


?>
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Diwata Oil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6b9c8a6e93.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="img/logo.png" class="logo">
            <nav>
                <ul id="tab">
                    <li><a href="#" class="tablinks active" onclick="openTab(event, 'Home')">Home</a></li>
                    <li><a href="#" class="tablinks" onclick="openTab(event, 'Products')">Products</a></li>
                    <li><a href="#" class="tablinks" onclick="openTab(event, 'About')">About</a></li>
                </ul>
            </nav>
            <i class="fa fa-bars menu-icon" aria-hidden="true"></i>
        </div>

        <div class="row tabcontent fade show" id="Home">
            <div class="col">
                <div id="home-background" class="blur-image"><br></div>
                <div id="home-intro-text">
                    <h1>Diwata Oil</h1>
                    <p> Diwata Oil's essential oil has great advantages and qualities that were exclusively created by our manufacturer.
                    </p>
                </div>
            </div>
        </div>

        <div class="row tabcontent" id="Products">
            <div class="col">
               <div class="product-card">
                    <div class="product-image">
                        <img src="img" alt="">
                    </div>
                    <div class="product-name">Name : Name</div>
               </div>
            </div>
            <div class="col"></div>
        </div>

        <div class="row tabcontent" id="About">
            <div class="col">
                <h1>About po  Teh</h1>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>