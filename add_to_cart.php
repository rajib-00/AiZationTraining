// Cart Functionality
// add_to_cart.php
<?php

include 'db_config.php';

$user_id = $_POST['user_id'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

$query = "INSERT INTO cart (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', '$quantity')";

if ($connection->query($query) === TRUE) {
    echo "Item added to cart successfully";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();

?>