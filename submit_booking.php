<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO bookings (fullName, email, phone, checkIn, checkOut, food) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $fullName, $email, $phone, $checkIn, $checkOut, $food);

// Set parameters and execute
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
$food = $_POST['food'];

if ($stmt->execute()) {
    echo "New booking recorded successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
