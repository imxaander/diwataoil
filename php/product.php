<?php
include 'connection.php';

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    <a href="#" class="neon-text"style="font-size: 40px;" onclick="closeProductDetails()">❀</a>
    <div id="product-details-wrapper" style="width: 100%;  margin: auto; background-color:<?php echo $row['bg_color']?>; " class="fade">
        <div class="w3-content w3-display-container" id="product-image-previews">
            <img class="mySlides6 fade" src="img/<?php echo $row['image_1']?>" style="">
            <img class="mySlides6 fade" src="img/<?php echo $row['image_2']?>" style="display: none;">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 5)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 5)">&#10095;</button>
        </div>
        <div id="product-details-text" style="color : <?php echo $row['text_color']?>!important">
                <p style="color : <?php echo $row['text_color']?>!important; font-size: 30px" class="centered"><?php echo $row['name']?></p>
                <br><br>
                <p id="product-description"style="color : <?php echo $row['text_color']?>!important"><?php echo $row['description']?></p>
                <br>
                <div id="product-price"style="color : white;">
                    <p  onclick="openModal('<?php echo $row['name']?>', '<?php echo $row['dropper_price']?>', '<?php echo $row['image_1']?>', 'Bottle w/ Dropper')" >Bottle w/ Dropper - ₱<?php echo $row['dropper_price']?></p>
                    <p  onclick="openModal('<?php echo $row['name']?>', '<?php echo $row['rollon_price']?>', '<?php echo $row['image_1']?>', 'Roll-on Bottle')" >Roll-on Bottle - ₱<?php echo $row['rollon_price']?></p>
                </div>
                <br>
        </div>
    </div>

<?php } ?>