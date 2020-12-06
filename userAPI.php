<?php
    ini_set('display_errors', 1);
	error_reporting(~0);
    include("server.php");
    if($_REQUEST['txtAction']=="login" && $_REQUEST['username'] !="" ){
    //echo("success");
    $Username = $_REQUEST["username"];
    $Password = $_REQUEST["password"];
    //echo($Username);
    //echo($Password);
    //สร้างคำค้น
    $strSearch="SELECT * FROM `VIEW_PlayerData` WHERE `username` LIKE '$Username' AND `password` LIKE '$Password'";
    //รันคำค้น
    $qSearch=$conn->query($strSearch);
    //นับจำนวนผลการสืบค้น
    $qRows=$qSearch->num_rows;
    if($qRows>0) {
        echo($qRows);
    } else{
        echo("Not found user");
    }
}
else{
    echo("access denied");
}
$conn->close();
?>