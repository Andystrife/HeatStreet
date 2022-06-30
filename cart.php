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


    <div id="contents" class="col-9">


        <div id="customer" class="col-5">
            <div id="direct"></div>
            <h1 class="headers"> Shipping Details</h1>

            <form action="newuser.php" method="post" id="add_customer">
                <label for="fullname">Full Name: </label><br>
                <input type="text" name="name" id="name" style="width:100%;" placeholder="John Doe"><br><br>
                <label for="email">Email Address: </label><br>
                <input type="email" name="email" id="email" style="width:100%;" placeholder="info@somewhere.com"><br><br>
                <label for="phone">Phone Number: </label><br>
                <input type="text" name="phone" id="phone" style="width:100%;" placeholder="(416)123-4567"><br><br>
                <label for="address">Shipping Address: </label><br>
                <input type="text" name="address" id="address" style="width:100%;" placeholder="123 Heat Street"><br><br>
                <label for="city">City: </label><br>
                <input type="text" name="city" id="city" style="width:100%;" placeholder="SpiceVille"><br><br>
                <label for="province">Province: </label><br>
                <select name="province" id="province">
                    <option value="BC">British Columbia</option>
                    <option value="AB">Alberta</option>
                    <option value="SK">Saskatchewan</option>
                    <option value="MB">Manitoba</option>
                    <option value="ON">Ontario</option>
                    <option value="QC">Quebec</option>
                    <option value="NB">New Brunswick</option>
                    <option value="NS">Nova Scotia</option>
                    <option value="PE">Prince Edward Island</option>
                    <option value="NF">Newfoundland</option>
                    <option value="YK">Yukon</option>
                    <option value="NWT">North West Territories</option>
                    <option value="NU">Nunavut</option>
                </select><br><br>

                <button type="submit" class="create_user" onclick="location.href='#direct'">Create Guest Order</button>
            </form>

        </div>

        <div id="cart" class="col-5">
            <h1 class="headers"> Order Details</h1>
            <div id="order_contents">
                <?php
                echo "<hr class='hr_width'>";
                $total = [];
                if (isset($_SESSION['mild'])) {
                    echo "<div class='cart_contents'>";
                    echo "<img src='images/bottles/mildBottle.png' class='cart_bottle'>";
                    $mildtotal = $_SESSION['mild'] * 4.95;
                    $total[] = $mildtotal;
                    echo "&nbsp; Mild Sauce x " . $_SESSION['mild'] . " Bottle(s) = " . "$" . number_format($mildtotal, 2);
                    echo "</div>";
                    echo "<hr class='hr_width'>";
                }
                if (isset($_SESSION['medium'])) {
                    echo "<div class='cart_contents'>";
                    echo "<img src='images/bottles/mediumBottle.png' class='cart_bottle'>";
                    $mediumtotal = $_SESSION['medium'] * 4.95;
                    $total[] = $mediumtotal;
                    echo "&nbsp; Medium Sauce x " . $_SESSION['medium'] . " Bottle(s) = " . "$" . number_format($mediumtotal, 2);
                    echo "</div>";
                    echo "<hr class='hr_width'>";
                }
                if (isset($_SESSION['hot'])) {
                    echo "<div class='cart_contents'>";
                    echo "<img src='images/bottles/hotBottle.png' class='cart_bottle'>";
                    $hottotal = $_SESSION['hot'] * 4.95;
                    $total[] = $hottotal;
                    echo "&nbsp; Hot Sauce x " . $_SESSION['hot'] . " Bottle(s) = " . "$" . number_format($hottotal, 2);
                    echo "</div>";
                    echo "<hr class='hr_width'>";
                }
                if (isset($_SESSION['extreme'])) {
                    echo "<div class='cart_contents'>";
                    echo "<img src='images/bottles/extremeBottle.png' class='cart_bottle'>";
                    $extremetotal = $_SESSION['extreme'] * 6.95;
                    $total[] = $extremetotal;
                    echo "&nbsp; Extreme Sauce x " . $_SESSION['extreme'] . " Bottle(s) = " . "$" . number_format($extremetotal, 2);
                    echo "</div>";
                    echo "<hr class='hr_width'>";
                }
                if (isset($_SESSION['fruity'])) {
                    echo "<div class='cart_contents'>";
                    echo "<img src='images/bottles/fruityBottle.png' class='cart_bottle'>";
                    $fruitytotal = $_SESSION['fruity'] * 6.95;
                    $total[] = $fruitytotal;
                    echo "&nbsp; Sweet Mango Sauce x " . $_SESSION['fruity'] . " Bottle(s) = " . "$" . number_format($fruitytotal, 2);
                    echo "</div>";
                    echo "<hr class='hr_width'><br>";
                }
                $_SESSION['total'] = number_format(array_sum($total), 2);
                echo "Your Total Order: $" . number_format(array_sum($total), 2);

                ?>
            </div>

        </div>


    </div>
    <a href="neworder.php" class="cartlink"><button class="purchase">Complete Purchase</button></a>

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