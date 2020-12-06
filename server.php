<?php
    $serverName = "localhost";
    $userName = "sisaketr_41965";
    $userPassword = "Skw41965";
    $dbName = "sisaketr_41965";

    //creat connection
    $conn = new mysqli($serverName,$userName,$userPassword,$dbName);

    //check connection
    if ($conn->connect_errno) {
		echo $conn->connect_error;
		exit;
	}
	else
	{
		//echo "Database Connected.";
	}


     
    
?>