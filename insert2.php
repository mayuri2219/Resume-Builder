<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_resume";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    // Check if the email already exists
    $checkEmailQuery = "SELECT * FROM register WHERE email='$email'";
    $result = $conn->query($checkEmailQuery);
    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists!');window.location.href = 'index3.html';</script>";
        exit(); // Stop further execution
    }
  
    // If email doesn't exist, proceed with insertion
    $insertQuery = "INSERT INTO register (
        name , 
        email,
        password
    ) VALUES (
        '$name',
        '$email',
        '$password'
    )";

    if ($conn->query($insertQuery) === TRUE) {
        echo "<script>alert('Data inserted successfully!'); window.location.href = 'index.html';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
