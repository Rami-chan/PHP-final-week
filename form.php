<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $food = $_POST["food"];
    $quantity = $_POST["quantity"];

    $price = 120;

    $total = $price * $quantity;


    if ($total >= 500) {

        $delivery = 0;

    } elseif ($total >= 300) {

        $delivery = 30;

    } else {

        $delivery = 50;

    }


    $grandTotal = $total + $delivery;


    echo "<h2>Order Submitted!</h2>";

    echo "Name: $name<br>";
    echo "Food: $food<br>";
    echo "Quantity: $quantity<br>";
    echo "Price: $price Baht<br>";
    echo "Order Total: $total Baht<br>";
    echo "Delivery Fee: $delivery Baht<br>";
    echo "Grand Total: $grandTotal Baht<br>";

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Food Order Form</title>
</head>

<body>

<h1>Food Order</h1>

<form method="POST">

    <label>Name:</label>
    <input type="text" name="name">

    <br><br>

    <label>Food:</label>
    <input type="text" name="food">

    <br><br>

    <label>Quantity:</label>
    <input type="number" name="quantity">

    <br><br>

    <button type="submit">Submit</button>

</form>

</body>

</html>