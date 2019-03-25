<?php
require 'app/Installer.php';

// Add to cart
if (hasAction('add')) {
    App\Cart::add(input('item'));
    back();
}

// Remove from cart
if (hasAction('remove')) {
    App\Cart::remove(input('item'));
    back();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Practice test</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Practice test">

    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="./assets/app.css">

</head>

<body>
    <?php require 'layout/header.php'; ?>

    <h3>Cart</h3>

    <?php
    if (App\Cart::numberOfItems() === 0) {
        require 'layout/emptycart.php';
    } else {
        require 'layout/cart.php';
    }
    ?>

    <h5 class="p-t-3">You may like</h5>
    <?php require 'layout/products.php'; ?>

</body>

</html>