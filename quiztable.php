<?php

$servername = "localhost";

$username = "root";

// password is empty 
$password = "";

$dbname = "mydemodb1";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("connection failed:" . mysqli_connect_errno());
}

$sql = "CREATE TABLE quizscore (
   username VARCHAR(100) NOT NULL,
    score INT NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "table quizscore created successfully";
} else {
    echo "error creating table :" . mysqli_error($conn);
}

mysqli_close($conn);
