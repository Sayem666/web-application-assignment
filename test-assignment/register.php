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
