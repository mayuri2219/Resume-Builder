<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rb_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
  
    $name = $_POST['name'];
    $email = $_POST['email'];

    $updateSql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("sssi", $id, $name, $email,);

    if ($stmt->execute()) {
        echo "Job updated successfully";
    } else {
        echo "Error updating job: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>