// db_config.php
<?php

$host = "localhost";
$username = "username";
$password = "password";
$database = "ecommercebasic";

$connection = new mysqli($host, $username, $password, $ecommercebasic);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>