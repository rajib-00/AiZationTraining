// update_cart.php
<?php

include 'db_config.php';

$user_id = $_POST['user_id'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

$query = "UPDATE cart SET quantity='$quantity' WHERE user_id='$user_id' AND product_id='$product_id'";

if ($connection->query($query) === TRUE) {
    echo "Cart updated successfully";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();

?>