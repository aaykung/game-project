<?php
    $servername = "localhost";
    $username = "sisaketr_41965";
    $password = "Skw41965";
    $dbname = "sisaketr_41965";

    //creat connection
    $conn = mysqli_connect($severname, $username, $password, $dbname);

    //check connection
    if (!$conn) {
        die("connection failed". mysqli_connect_error());
    } else {
        echo "Connected successfully";
    }
?>