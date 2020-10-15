<?php
    if($_REQUEST['txtAction']=="login" && $_REQUEST['username']=="aaykung" && $_REQUEST['password']== "12345"){
    echo("success");

    $playerData = array("username"=>"Player1","totalscore"=>1000);
    echo(json_encode($playerData));
}
else{
    echo("access denied");
}
?>