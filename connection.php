<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'test_grading_sys');

    if(!$conn){
        die("Could not connect to the database :(" . mysqli_connect_error());
    }
    // else{
    //     echo "asd";
    // }
?>