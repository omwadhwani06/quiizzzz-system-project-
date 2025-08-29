<?php

$link = mysqli_connect("localhost", "root", "", "mydemodb1");

if ($link ==  false) {
    die("error: could not connect:" . mysqli_connect_error());
}

$sql = "INSERT INTO quiz (question , option_a ,  option_b, option_c,  option_d, correct_option) 
values ('What is the capital of India?','Mumbai','New Delhi','kolkatta','chennai','option_b'),
('Who is known as the Father of the Nation in India?','Mahatma Gandhi','Sardar Patel','nehru jii','modi','option_a'),
('Which planet is known as the Red Planet?','Venus','mars','Mercury','jupiter','option_b'),
('Who wrote the Indian National Anthem?','Rabindranath Tagore','Subhas Chandra Bose','om wadhwani','chennai tedulkar','option_a'),
('Which is the largest ocean in the world?','pacific ocean','Atlantic Ocean','Indian Ocean','chambar naala ','option_a'),
('In which year did India get independence?','1942','1945','2025','1947','option_d')";

if (mysqli_query($link, $sql)) {
    echo "records inserted successfully.";
} else {
    echo  "error could not able to connect $sql ."
        . mysqli_error($link);
}

mysqli_close($link);
