// login_user.php
<?php

include 'db_config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    echo "Login successful";
} else {
    echo "Login failed";
}

$connection->close();

?>