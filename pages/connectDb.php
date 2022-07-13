<?php

//server, user, password, db
$connection = mysqli_connect("localhost","root","","notbul");
if(!$connection){
    echo "Database Error!<br/>";
    echo "Error: " . mysqli_connect_error();
    exit;
}
mysqli_query("SET NAMES utf8");
mysqli_query("SET CHARACTER SET utf8");
mysqli_query("SET COLLACTION_CONNECTION ='utf8_turkish_ci'");
?>