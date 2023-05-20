<?php
// Establish database connection
$host = 'localhost';
$db = '';
$user = '';
$password = '';

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Retrieve form data
$bookname = $_POST['bookname'];
$publisherName = $_POST['publisherName'];
$age = $_POST['age'];
$publishDate = $_POST['publishDate'];
$seifi = $_POST['seifi'];
$drama = $_POST['drama'];
$novel = $_POST['novel'];

// Insert data into database
$sql = "INSERT INTO users (bookname, publisherName, age, publishDate, seifi, drama, novel) VALUES ('$bookname', '$publisherName', '$age', '$publishDate', '$seifi', '$drama', '$novel')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
