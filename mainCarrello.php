<?php

require './PHP/smartphone.php';
require './PHP/gestione.php';
require './PHP/errors.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css">
    <title>Shopping Cart</title>
</head>

<body>

    <?php

    include './Templates/navbar.php';

    ?>

    <section class="cart">
        <div class="container">

            <?php
            echo message();
            
            if(isset($_POST['checkOut'])){
                acquista();
                echo getShoppingCart();
             }else{
                echo getShoppingCart();
             }

            ?>


        </div>
    </section>

    <!--FONTAWESOME JS LINK-->
    <script src="https://kit.fontawesome.com/1640a3f9de.js"></script>
    <!--JQUERY JS LINK-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--GSAP JS LINK-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
    <!--GSAP TWEEN_MAX JS LINK-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

    <script src="./JS/main.js"></script>
</body>



</html>