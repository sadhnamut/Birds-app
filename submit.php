<?php
// Establish connection to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "birds1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO contact (name, email, mobile, password, message) VALUES ('$name', '$email', '$mobile', '$password', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close MySQL connection
$conn->close();
?>
