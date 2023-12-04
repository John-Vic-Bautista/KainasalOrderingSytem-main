<?php
$servername = "your_server_name"; // Replace with your server name
$username = "your_username";       // Replace with your database username
$password = "your_password";       // Replace with your database password
$database = "Kainasal";       // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to join the four tables
$sql = "SELECT * FROM Admin 
        JOIN Menu ON Admin.StaffID = Menu.StaffID
        JOIN Delivery ON Admin.StaffID = User.StaffID
        JOIN OrderDetails ON Admin.StaffID = OrderDetails.StaffID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Access data from the joined tables
        $adminData = $row['column_name_in_Admin'];
        $menuData = $row['column_name_in_Menu'];
        $UserData = $row['column_name_in_User'];
        $orderDetailsData = $row['column_name_in_OrderDetails'];

        // Process and display the data as needed
        echo "Admin Data: $adminData, Menu Data: $menuData, User Data: $UserData, OrderDetails Data: $orderDetailsData<br>";
    }
} else {
    echo "No results found.";
}

// Don't forget to close the connection when you're done
$conn->close();
?>
