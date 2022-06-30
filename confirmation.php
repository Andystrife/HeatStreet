<?php

require("database.php");
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Square+Peg&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Heat Street - Cart</title>
    <link href="productstyles.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
    <img src="images/header02.png" alt="" id="coverimage" />
    <div class="topnav" id="myTopnav">
        <a href="index.html" class="active">HOME</a>
        <a href="menumild.html">MENU</a>
        <a href="products.php">PRODUCTS</a>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <img src="images/orderlogo.png" alt="" id="orderlogo">

    <div id="received" class="col-5">
        <h1 id="order_received">Order Received!</h1>

        <p id="ordermsg">
            You should expect 2-3 days for shipping.<br>
            Thank you for your order!<br><br>
            <a href="index.html" class="cartlink"><button class="home_button" onclick="<?php session_destroy(); ?>">Return to Home Page</button></a>

        </p>
    </div>

    <div class="gap"></div>
    <div class="footer">
        <p>&copy; Andrew Dinsmore 2022</p>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>