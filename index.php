<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
//declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// We are going to use session variables so we need to enable sessions
session_start();

require 'classes/products.php';

// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
    
}

//whatIsHappening();


function validateRequiredFields() {
    $isOkay = true;
    foreach($_POST as $field => $value) {
        if(empty($value)) {
            $isOkay = false;
        }
    }
    return $isOkay;
}

function validate() {
    $formCorrect = true;

    if (!validateRequiredFields()) {
        $formCorrect = false;
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $formCorrect = false;
    }
    return $formCorrect;
}


// TODO: Create classes for products (you may overwrite the example)
// $products = [
//     0 => ['name' => 'Mushy Lime', 'price' => 1.50],
//     1 => ['name' => 'Moldy Lime', 'price' => 3.50],
//     2 => ['name' => 'Dried out lime seeds', 'price' => 2.50],
//     3 => ['name' => 'Rotten lime', 'price' => 4.50],
//     4 => ['name' => 'Premium: untouched Lime!', 'price' => 8.99],

// ];


$product1 = new Product;
$product1-> setNewProduct("Mushy Lime", 1.50);

$product2 = new Product;
$product2-> setNewProduct("Moldy Lime", 3.50);

$product3 = new Product;
$product3-> setNewProduct("Dried out Lime Seeds", 2.50);

$product4 = new Product;
$product4-> setNewProduct("Rotten Lime", 4.50);

$product5 = new Product;
$product5-> setNewProduct("Premium untouched Lime!", 9.99);


//array of products
$products =  [
    $product1,
    $product2,
    $product3,
    $product4,
    $product5,
];
foreach($products as $product) {
    var_dump($product->price);
}
var_dump($products[2]->price);






/*if(isset($_POST['submit'])){

    //Variables
    $email = $_POST['email'];
    $street = $_POST['street'];
    $streetNumber = $_POST['streetnumber'];
    $city = $_POST['city'];
    $zipCode = $_POST['zipcode'];

    $adress = $street . " " . $streetNumber . " in " . $zipCode . " " . $city;
    
    echo '<div class="alert align-middle alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>SubLime!</strong> Your order has been confirmed, and the following items will be delivered to: ' . $adress . '
  </div>';

    
    If $products[$i] == yes -> add up value of $products['price'], 
    if $product['$i'] == yes -> add $products['name'] to order confirm (with billing adress)
    */
   
// if (!empty($_POST['products'])) {
    
//     foreach($products as $product) {
//     echo '<div class="alert alert-warning alert-dismissible">
//     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//     <strong>Ordered items:</strong> <br>
//     ' . $product['name'] . '  </div>';

//     //echo array_sum($products['price'] ); -> bugs page to white page
//  }
// }
    

    


$totalValue = 0;

require 'form-view.php';