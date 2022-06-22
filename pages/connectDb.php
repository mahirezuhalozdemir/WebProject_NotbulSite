<?php

//server, user, password, db
$connection = mysqli_connect("localhost","root","220704090902NevPolimer","notbul");
if(!$connection){
    echo "Database Error!<br/>";
    echo "Error: " . mysqli_connect_error();
    exit;
}
?>