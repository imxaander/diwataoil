<?php
include 'php/connection.php';


?>
<html> 
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Diwata Oil</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6b9c8a6e93.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <script>
        function closeProductDetails(){
            document.getElementById('product-details').style.display = "none";
        document.getElementById('product-grid').style.display = "grid";
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="img/logo.png" class="logo">
            <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-bars menu-icon" aria-hidden="true" id="menu-bar-btn"></i>
            </label>
                <ul id="tab">
                    <li><a href="#" class="tablinks active" onclick="openTab(event, 'Home')">Home</a></li>
                    <li><a href="#" class="tablinks" onclick="openTab(event, 'Products')">Products</a></li>
                    <li><a href="#" class="tablinks" onclick="openTab(event, 'About')">About</a></li>
                </ul>
            </nav>
            
        </div>

        <div class="row tabcontent fade show" id="Home">
            <div class="col">
                <div id="home-background" class="blur-image"><br></div>
                <div id="home-intro-text">
                    <h1 class="neon-text">Diwata Oil</h1>
                    <p id="home-text-p"> Diwata Oil's essential oil has great advantages and qualities that were exclusively created by our manufacturer.
                    </p>
                </div>
            </div>
        </div>

        <div class="row tabcontent" id="Products">
        <h1 class="neon-text centered">Products</h1>
            <div class="col" id="product-grid">

            <?php
                    $sql = "SELECT * FROM products";
                    $result = mysqli_query($con, $sql);

                    while($row = mysqli_fetch_array($result)){?>
                            
                            <div class="product-card">
                                    <div class="product-image fade">
                                        <div class="w3-content w3-display-container">
                                            <img class="mySlides<?php echo $row['id']?> fade" src="img/<?php echo $row['image_1']?>" style="width:100%">
                                            <img class="mySlides<?php echo $row['id']?> fade" src="img/<?php echo $row['image_2']?>" style="width:100%">
                                            
                                        </div>
                                        <br>
                                    </div>
                                    <a href="#product-details" data-id="<?php echo $row['id']?>" class="product-items">
                                    <div class="product-name fade" style="font-family: BodyFont;"><?php echo $row['name']?></div>
                                    </a>
                            </div>
                            
                <?php  }
                ?>

            </div>
            <div id="product-details">
            <div class="w3-content w3-display-container">
            <img class="mySlides6 fade" src="img/<?php echo $row['image_1']?>" style="width:100%">
            <img class="mySlides6 fade" src="img/<?php echo $row['image_2']?>"  style="width:100%;">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 5)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 5)">&#10095;</button>
        </div>
            </div>
            

        </div>

        <div class="row tabcontent fade" id="About">
            <div class="col" id="about-tab-wrapper">
                <h1 class="neon-text">About Us</h1>
                <p style=" color: white; text-indent: 50px; font-family: BodyFont;">Unlike other companies selling the same thing, Diwata Oil offers a variety of scent options, allowing clients to sample 
                    our distinctive oils like oregano, lemon, orange, sampaguita (white jasmine), and gumamela (hibiscus). 
                    While Diwata Oil is a natural product made from a single plant species, our essential oil contains strong anti-inflammatory, antioxidant, and antibacterial characteristics, 
                    as well as an incredible aroma that will undoubtedly make you feel calm and healed throughout the day.
                </p>

                <br><br>

                <p style="font-size: 40px; text-align: center; font-family: Happiness;">Objectives</p>
                <br><br>
                <ul >
                    <li>To generate a constant profit from the business</li>
                    <li>To provide essential oils made from environmentally sustainable components and substances.</li>
                    <li>To offer consumers essential oils that are backed up with data and scientifically prioven to give benefits.</li>
                    <li>To ensure that the essential oil is beneficial and harmless to the people and environment.</li>
                    <li>To assure product safety and encourage customer disclosure of information.</li>
                    <li>To supply customers with high-quality essential oils at a reasonable price.</li>
                </ul>

                <br><br>

                <p style="font-size: 40px; text-align: center; font-family: Happiness;">Mission</p>
                <br><br>
                <p style=" color: white; text-indent: 50px; font-family: BodyFont;">Our mission is to create a safe and affordable essential oil that will improve mood, reduce stress and eliminate bacteria and funguses on the skin. In addition, we assure you that the plants are healthy and safe, such as ylang-ylang, basil, myrtle, and rose. Furthermore we will operate the best methods for extracting essential oils from specific plants. Lastly, we'll fill customer's satisfaction and request feedback to ensure quality service.
                </p>

                <br><br>

                <p style="font-size: 40px; text-align: center; font-family: Happiness;">Vision</p>
                <br><br>
                <p style=" color: white; text-indent: 50px; font-family: BodyFont;">Our vision is to be known as the top provider of essential oils in the country and get some recognition in the world market. We see our company as a trusted organic essential oil company that offers scent and flavor features that expresses an individual's unique character
                </p><br><br>
            </div>
            <div class="col"></div>
        </div>
    </div>
            <div id="myModal" class="modal">
                <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Payment Summary</p>
                        <div id="modal-body">
                            <div id="item-image-payment-wrapper" wid>
                                <img id="item-image-payment" src="" alt="">
                            </div>
                            <div id="item-details-payment">
                                <p id="item-name-payment"></p>
                                <p id="item-price-payment"></p>
                                <p id="item-variant-payment"></p>
                            </div>
                        </div>
                </div>
            </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="script.js" ></script>
</body>
</html>