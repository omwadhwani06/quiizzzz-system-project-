<?php
$servername = "localhost";
$username_db = "root"; 
$password_db = ""; 
$dbname = "mydemodb1";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'] ?? '';
$score = $_POST['score'] ?? 0;

if (!empty($username)) {
    $stmt = $conn->prepare("INSERT INTO quizscore (username, score) VALUES (?, ?)");
    $stmt->bind_param("si", $username, $score);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>
