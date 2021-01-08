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
    
    echo '<div class="alert align-middle alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>SubLime!</strong> Your order has been confirmed, and the following items will be delivered to: ' . $adress . '
  </div>';

    /*
    If $products[$i] == yes -> add up value of $products['price'], 
    if $product['$i'] == yes -> add $products['name'] to order confirm (with billing adress)
    */
   
if (!empty($_POST['products'])) {
    
    foreach($products as $product) {
    echo '<div class="alert alert-warning alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Ordered items:</strong> <br>
    ' . $products[$product] .'  </div>';
 }
}
    

    

}
$totalValue = 0;

require 'form-view.php';