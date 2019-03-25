<?php
require 'app/Installer.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Practice test | EsyVet</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Practice test | EsyVet">

    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="./assets/app.css">

</head>

<body>
    <?php require 'layout/header.php'; ?>

    <h3 class="p-t-1">Products</h3>
    <?php require 'layout/products.php'; ?>
</body>

</html>