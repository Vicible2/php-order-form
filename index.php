<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

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

// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'Mushy Lime', 'price' => 1.50],
    ['name' => 'Moldy Lime', 'price' => 3.50],
    ['name' => 'Dried out lime seeds', 'price' => 2.50],
    ['name' => 'Rotten lime', 'price' => 4.50],
    ['name' => 'Premium: untouched Lime!', 'price' => 8.99],

];

if(isset($_POST['submit'])){

    //Variables

    $email = $_POST['email'];
    $street = $_POST['street'];
    $streetNumber = $_POST['streetnumber'];
    $city = $_POST['city'];
    $zipCode = $_POST['zipcode'];

    $adress = $street . " " . $streetNumber . " in " . $zipCode . " " . $city;
    
    echo "Your order will be delivered to: " . $adress;

    if($products['Mushy Lime'] == 'Yes'){
        echo "You ordered a mushy lime";
    }
      echo "You have ordered!";
}
$totalValue = 0;

require 'form-view.php';