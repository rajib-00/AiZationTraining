// Product Listing and Detail Retrieval
// retrieve_products.php
<?php

include 'db_config.php';

$query = "SELECT * FROM products";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Category: " . $row["category"]. "<br>";
    }
} else {
    echo "No products found";
}

$connection->close();

?>