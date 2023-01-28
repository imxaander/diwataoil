<?php
include 'php/connection.php';


?>
<html> 
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Diwata Oil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6b9c8a6e93.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

                <?php
                    $sql = "SELECT * FROM products";
                    $result = mysqli_query($con, $sql);

                    while($row = mysqli_fetch_array($result)){?>
                            <div class="product-card">
                                    <div class="product-image">
                                        <div class="w3-content w3-display-container">
                                            <img class="mySlides<?php echo $row['id']?>" src="img/<?php echo $row['image_1']?>" style="width:100%">
                                            <img class="mySlides<?php echo $row['id']?>" src="img/<?php echo $row['image_2']?>" style="width:100%">
                                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, <?php echo $row['id'] -1?>)">&#10094;</button>
                                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, <?php echo $row['id'] - 1?>)">&#10095;</button>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="product-name"><?php echo $row['name']?></div>
                            </div>
                <?php  }
                ?>



            </div>

        </div>

        <div class="row tabcontent" id="About">
            <div class="col">
                <h1>About po  Teh</h1>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="script.js" ></script>
</body>
</html>