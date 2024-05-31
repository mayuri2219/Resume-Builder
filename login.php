<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rb_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
$stmt->bind_param("ss", $email, $password); // Bind email and password as strings

// Execute the statement
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['email'] == 'admin@gmail.com') {
        echo "<script>alert('Login successful.'); window.location.href='admin_dashboard/admin_index.php';</script>";
    } else {
        echo "<script>alert('Login successful.'); window.location.href='index2.html';</script>";
    }
} else {
    echo "<script>alert('Invalid email or password.'); window.location.href='index.html';</script>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
