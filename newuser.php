<?php
require("database.php");


$errors = [];

if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = null;
    $errors[] = "Please Enter Your Full Name.<br>";
}

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = null;
    $errors[] = "Please Enter Your Email.<br>";
}

if (!empty($_POST['phone'])) {
    $phone = $_POST['phone'];
} else {
    $phone = null;
    $errors[] = "Please Enter Your Phone Number.<br>";
}

if (!empty($_POST['address'])) {
    $address = $_POST['address'];
} else {
    $address = null;
    $errors[] = "Please Enter Your Address.<br>";
}

if (!empty($_POST['city'])) {
    $city = $_POST['city'];
} else {
    $city = null;
    $errors[] = "Please Enter Your City.<br>";
}

if (!empty($_POST['province'])) {
    $province = $_POST['province'];
} else {
    $province = null;
    $errors[] = "Please Enter a Province.<br>";
}




if (count($errors) == 0) {
    $name_clean = prepare_string($dbc, $name);
    $email_clean = prepare_string($dbc, $email);
    $address_clean = prepare_string($dbc, $address);
    $city_clean = prepare_string($dbc, $city);
    $province_clean = prepare_string($dbc, $province);
    $phone_clean = prepare_string($dbc, $phone);

    $query = "INSERT INTO customer (fullname, email, address, city, province, phone) VALUES (?,?,?,?,?,?);";

    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param(
        $stmt,
        'ssssss',
        $name_clean,
        $email_clean,
        $address_clean,
        $city_clean,
        $province_clean,
        $phone_clean
    );

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header("Location:cart.php");
        exit;
    } else {
        echo "There Was an Error Saving the Data.";
    }
} else {
    foreach ($errors as $error) {
        echo $error;
    }
}
