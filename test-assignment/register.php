<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "database_restaurant";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert into DB
$sql = "INSERT INTO customers (name, email, password, address, phone, gender)
        VALUES ('$name', '$email', '$hashedPassword', '$address', '$phone', '$gender')";

if ($conn->query($sql) === TRUE) {
  header("Location: success.php");
  exit();
} else {
  echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>
<!--  CREATE DATABASE restaurant_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) ,
    email VARCHAR(100)  UNIQUE,
    password VARCHAR(255) NOT NULL,
    address TEXT,
    phone VARCHAR(20),
    gender ENUM('Male', 'Female', 'Other'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-->
