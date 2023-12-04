<?php
// Establish a connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "kainasal";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Validate user credentials (You should compare hashed passwords in a real scenario)
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Invalid username or password";
}

// Close the database connection
$conn->close();
?>

