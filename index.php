<?php

$name = "Apichaya";
$price = 120;
$quantity = 3;

$total = $price * $quantity;


// Delivery rule

if ($total >= 500) {

    $delivery = 0;

} elseif ($total >= 300) {

    $delivery = 30;

} else {

    $delivery = 50;

}


$grandTotal = $total + $delivery;


// Display result

echo "Hello, $name!<br>";
echo "Product price: $price Baht<br>";
echo "Quantity: $quantity<br>";
echo "Order total: $total Baht<br>";
echo "Delivery fee: $delivery Baht<br>";
echo "Grand total: $grandTotal Baht";

echo "<h3>Menu</h3>";

$menu = [
    "Burger",
    "Pizza",
    "Fried Chicken",
    "French Fries"
];

foreach ($menu as $item) {

    echo "$item<br>";

}
?>