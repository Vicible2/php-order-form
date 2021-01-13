<?php

//Default Product blueprint (with class)
class Product
{
    var $name;
    var $price;


    function setNewProduct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

// //Create first product instance
// $mushyLime = new Product;

// //Set properties first product
// $mushyLime->name = 'Mushy Lime';
// $mushyLime->price = 1.50;

// //Create second product instance
// $moldyLime = new Product;

// //Set properties second product
// $moldyLime->name = 'Moldy Lime';
// $moldyLime->price = 3.50;
