<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "mydemodb1"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed"]));
}

$sql = "SELECT * FROM quiz";
$result = $conn->query($sql);

$questions = [];
while ($row = $result->fetch_assoc()) {
    // Map correct_option string to index number
    $correctIndex = null;
    switch ($row['correct_option']) {
        case "option_a": $correctIndex = 0; break;
        case "option_b": $correctIndex = 1; break;
        case "option_c": $correctIndex = 2; break;
        case "option_d": $correctIndex = 3; break;
    }

    $questions[] = [
        "question" => $row['question'],
        "options" => [$row['option_a'], $row['option_b'], $row['option_c'], $row['option_d']],
        "answer" => $correctIndex
    ];
}

header('Content-Type: application/json');
echo json_encode($questions);
$conn->close();
?>
