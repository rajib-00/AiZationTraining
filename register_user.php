// User Authentication and Management
// register_user.php
<?php

include 'db_config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

if ($connection->query($query) === TRUE) {
    echo "User registered successfully";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();

?>