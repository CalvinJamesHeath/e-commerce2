<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Televisores Class
require ('database/Televisores.php');

// require Product Class
require ('database/Camaras.php');

// require Televisores Class
require ('database/Videoconsolas.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

$product_shuffle = $product->getData();

// Televisores object
$televisores = new Televisores($db);

$televisores_shuffle = $televisores->getData();

// Camaras object
$camaras = new Camaras($db);

$camaras_shuffle = $camaras->getData();

// Videoconsolas object
$videoconsolas = new Videoconsolas($db);

$videoconsolas_shuffle = $videoconsolas->getData();


