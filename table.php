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

$sql = "CREATE TABLE quiz (
  question TEXT,
  option_a varchar(200) NOT NULL,
  option_b varchar(200) NOT NULL,
  option_c varchar(200) NOT NULL, 
  option_d varchar(200) NOT NULL,
  correct_option varchar(200) NOT NULL 
)";


if (mysqli_query($conn,$sql)){
    echo "table quiz created successfully";
}else {
    echo "error creating table :" . mysqli_error($conn);
}

mysqli_close($conn);
?>
