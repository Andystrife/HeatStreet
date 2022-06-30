<?php
require("database.php");

session_start();

$customerID = "SELECT CustomerID FROM customer ORDER BY CustomerID DESC LIMIT 1;";
$results = mysqli_query($dbc, $customerID);
$row = mysqli_fetch_assoc($results);

$query = "INSERT INTO orders (CustomerID, MildQuantity, MediumQuantity, 
HotQuantity, ExtremeQuantity, FruityQuantity, TotalCost) VALUES (?,?,?,?,?,?,?);";


$stmt = mysqli_prepare($dbc, $query);

mysqli_stmt_bind_param(
    $stmt,
    'sssssss',
    $row['CustomerID'],
    $_SESSION['mild'],
    $_SESSION['medium'],
    $_SESSION['hot'],
    $_SESSION['extreme'],
    $_SESSION['fruity'],
    $_SESSION['total']
);

$result = mysqli_stmt_execute($stmt);

if($result){
    $mildSelect = "SELECT QuantityInStock FROM inventory WHERE ProductID=1;";
    $mildUpdate = mysqli_query($dbc, $mildSelect);
    $row1 = mysqli_fetch_assoc($mildUpdate);
    $newmild = $row1['QuantityInStock'] - $_SESSION['mild'];
    $mildQuery = "UPDATE inventory SET QuantityInStock = ? WHERE ProductId = 1;";
    $stmt_mild = mysqli_prepare($dbc, $mildQuery);
    mysqli_stmt_bind_param(
        $stmt_mild,
        's',
        $newmild
    );
    $result1 = mysqli_stmt_execute($stmt_mild);
    
    $mediumSelect = "SELECT QuantityInStock FROM inventory WHERE ProductID=2;";
    $mediumUpdate = mysqli_query($dbc, $mediumSelect);
    $row1 = mysqli_fetch_assoc($mediumUpdate);
    $newmedium = $row1['QuantityInStock'] - $_SESSION['medium'];
    $mediumQuery = "UPDATE inventory SET QuantityInStock = ? WHERE ProductId = 2;";
    $stmt_medium = mysqli_prepare($dbc, $mediumQuery);
    mysqli_stmt_bind_param(
        $stmt_medium,
        's',
        $newmedium
    );
    $result2 = mysqli_stmt_execute($stmt_medium);
    
    $hotSelect = "SELECT QuantityInStock FROM inventory WHERE ProductID=3;";
    $hotUpdate = mysqli_query($dbc, $hotSelect);
    $row1 = mysqli_fetch_assoc($hotUpdate);
    $newhot = $row1['QuantityInStock'] - $_SESSION['hot'];
    $hotQuery = "UPDATE inventory SET QuantityInStock = ? WHERE ProductId = 3;";
    $stmt_hot = mysqli_prepare($dbc, $hotQuery);
    mysqli_stmt_bind_param(
        $stmt_hot,
        's',
        $newhot
    );
    $result3 = mysqli_stmt_execute($stmt_hot);
    
    $extremeSelect = "SELECT QuantityInStock FROM inventory WHERE ProductID=4;";
    $extremeUpdate = mysqli_query($dbc, $extremeSelect);
    $row1 = mysqli_fetch_assoc($extremeUpdate);
    $newextreme = $row1['QuantityInStock'] - $_SESSION['extreme'];
    $extremeQuery = "UPDATE inventory SET QuantityInStock = ? WHERE ProductId = 4;";
    $stmt_extreme = mysqli_prepare($dbc, $extremeQuery);
    mysqli_stmt_bind_param(
        $stmt_extreme,
        's',
        $newextreme
    );
    $result4 = mysqli_stmt_execute($stmt_extreme);
    
    $fruitySelect = "SELECT QuantityInStock FROM inventory WHERE ProductID=5;";
    $fruityUpdate = mysqli_query($dbc, $fruitySelect);
    $row1 = mysqli_fetch_assoc($fruityUpdate);
    $newfruity = $row1['QuantityInStock'] - $_SESSION['fruity'];
    $fruityQuery = "UPDATE inventory SET QuantityInStock = ? WHERE ProductId = 5;";
    $stmt_fruity = mysqli_prepare($dbc, $fruityQuery);
    mysqli_stmt_bind_param(
        $stmt_fruity,
        's',
        $newfruity
    );
    $result5 = mysqli_stmt_execute($stmt_fruity);

     header("Location:confirmation.php");
     exit;
}else {
    echo "There was an error sending the data.  Please try again.";
}
