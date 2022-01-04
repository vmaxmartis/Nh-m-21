<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nhom21";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo("nice!");

}else 
    echo("no!");
?>