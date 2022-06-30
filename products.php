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
    <link rel="stylesheet" href="productstyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Square+Peg&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Heat Street Cafe - Products</title>
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

    <img src="images/productslogo.png" alt="" id="productslogo">

    <div class="product_intro col-6">
        Looking to bring the heat home??? Well you're one lucky son of a gun! It just so happens that we sell our
        signature hot sauces for home use! Just want to add a bit of heat? Grab a bottle of our Mild sauce! Looking for
        the whole spicy experience? Grab one or two of our Hot bottles! If you're really crazy, and I'm sure you are, take a
        chance and jump in face first with our Extreme sauce! Word of Warning though, use sparingly! We would love to sell you
        tons of hot sauce, but 1 bottle of our Extreme sauce will keep you heated up for months!<br>
        What are you waiting for?! Fill up that cart!
    </div>
    <div id="direct"></div>
    <form action="" method="post" id="cart_form">
        <div class="products_row">

            <div class="product_card col-3">
                <img src="images/bottles/mildbottle.png" alt="" class="bottle_img">
                <p class="prod_desc">
                    Made with a blend of ripe tomatoes, red peppers, and a handful of jalapenos to
                    give it that little kick, this sauce is mostly a safe bet for those sensitive to spice
                    but still need that punch!<br>
                    $4.95<br>
                    <input type="number" name="mildsauce" class="quantity" placeholder=0 min=0 max=<?php $mild_query = "SELECT QuantityInStock FROM inventory WHERE ProductDesc='Mild Sauce';";
                                                                                                    $mild_results = @mysqli_query($dbc, $mild_query);
                                                                                                    while ($row = mysqli_fetch_array($mild_results, MYSQLI_ASSOC)) {
                                                                                                        $mild_max = "{$row['QuantityInStock']}";

                                                                                                        echo $mild_max;
                                                                                                    } ?>><br>
                    <button class="button" onclick="<?php
                                                    if (!empty($_POST['mildsauce'])) {
                                                        $mild = $_POST['mildsauce'];
                                                        $_SESSION['mild'] = $mild;
                                                    }

                                                    ?>  location.href='#direct'">Add to Cart</button>
                </p>
            </div>
            <div class="product_card col-3">
                <img src="images/bottles/mediumbottle.png" alt="" class="bottle_img">
                <p class="prod_desc">
                    Ready to try a more heated experience? This sauce gives a handshake to the
                    scotch bonnet pepper. We paired these peppers with tomatoes, carrots and our
                    secret spice blend.<br>
                    $4.95<br>
                    <input type="number" name="mediumsauce" class="quantity" placeholder=0 min=0 max=<?php $medium_query = "SELECT QuantityInStock FROM inventory WHERE ProductDesc='Medium Sauce';";
                                                                                                        $medium_results = @mysqli_query($dbc, $medium_query);
                                                                                                        while ($row = mysqli_fetch_array($medium_results, MYSQLI_ASSOC)) {
                                                                                                            $medium_max = "{$row['QuantityInStock']}";

                                                                                                            echo $medium_max;
                                                                                                        } ?>><br>
                    <button class="button" onclick="<?php
                                                    if (!empty($_POST['mediumsauce'])) {
                                                        $medium = $_POST['mediumsauce'];
                                                        $_SESSION['medium'] = $medium;
                                                    }

                                                    ?> location.href='#direct'">Add to Cart</button>
                </p>
            </div>
            <div class="product_card col-3">
                <img src="images/bottles/hotbottle.png" alt="" class="bottle_img">
                <p class="prod_desc">
                    This sauce features a visit from our friend the Ghost
                    Pepper. Weighing in at almost 1 million Scoville Units, this sauce is not for the feint of
                    heart. If you really love the heat, you'll really love this sauce!<br>
                    $4.95<br>
                    <input type="number" name="hotsauce" class="quantity" placeholder=0 min=0 max=<?php $hot_query = "SELECT QuantityInStock FROM inventory WHERE ProductDesc='Hot Sauce';";
                                                                                                    $hot_results = @mysqli_query($dbc, $hot_query);
                                                                                                    while ($row = mysqli_fetch_array($hot_results, MYSQLI_ASSOC)) {
                                                                                                        $hot_max = "{$row['QuantityInStock']}";

                                                                                                        echo $hot_max;
                                                                                                    } ?>><br>
                    <button class="button" onclick="<?php
                                                    if (!empty($_POST['hotsauce'])) {
                                                        $hot = $_POST['hotsauce'];
                                                        $_SESSION['hot'] = $hot;
                                                    }

                                                    ?> location.href='#direct'">Add to Cart</button>
                </p>
            </div>
        </div>
        <div class="products_row">
            <div class="product_card col-3">
                <img src="images/bottles/extremebottle.png" alt="" class="bottle_img">
                <p class="prod_desc">
                    Proceed with caution.
                    Crafted with the intense Carolina Reaper Pepper, we always ask twice when a guest orders it. Carolina
                    Reapers, fresh tomatoes, and our secret spice blend will have you ordering a glass of milk on the side.<br>
                    $6.95<br>
                    <input type="number" name="extremesauce" class="quantity" placeholder=0 min=0 max=<?php $extreme_query = "SELECT QuantityInStock FROM inventory WHERE ProductDesc='Extreme Sauce';";
                                                                                                        $extreme_results = @mysqli_query($dbc, $extreme_query);
                                                                                                        while ($row = mysqli_fetch_array($extreme_results, MYSQLI_ASSOC)) {
                                                                                                            $extreme_max = "{$row['QuantityInStock']}";

                                                                                                            echo $extreme_max;
                                                                                                        } ?>><br>
                    <button class="button" onclick="<?php
                                                    if (!empty($_POST['extremesauce'])) {
                                                        $extreme = $_POST['extremesauce'];
                                                        $_SESSION['extreme'] = $extreme;
                                                    }

                                                    ?> location.href='#direct'">Add to Cart</button>
                </p>
            </div>
            <div class="product_card col-3">
                <img src="images/bottles/fruitybottle.png" alt="" class="bottle_img">
                <p class="prod_desc">
                    Looking for a sauce for grandma? Look no further! This sauce is crafted specifically for a sweet fresh flavor.
                    Pineapple, apricot, and mango are the stars of this show. Great for dipping nachos or tossing with wings!<br>
                    $6.95<br>
                    <input type="number" name="fruitysauce" class="quantity" placeholder=0 min=0 max=<?php $fruity_query = "SELECT QuantityInStock FROM inventory WHERE ProductDesc='Fruity Sauce';";
                                                                                                        $fruity_results = @mysqli_query($dbc, $fruity_query);
                                                                                                        while ($row = mysqli_fetch_array($fruity_results, MYSQLI_ASSOC)) {
                                                                                                            $fruity_max = "{$row['QuantityInStock']}";

                                                                                                            echo $fruity_max;
                                                                                                        } ?>><br>
                    <button class="button" onclick="<?php
                                                    if (!empty($_POST['fruitysauce'])) {
                                                        $fruity = $_POST['fruitysauce'];
                                                        $_SESSION['fruity'] = $fruity;
                                                    }

                                                    ?> location.href='#direct'">Add to Cart</button>
                </p>
            </div>
        </div>
    </form>
    <br>
    <a href="cart.php" class="cartlink"><button class="cart">View Cart</button></a>


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