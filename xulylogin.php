<?php
session_start();
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$conn = mysqli_connect("localhost", "root", "", "tms") or die("không kết nối được");
mysqli_query($conn, "SET NAMES 'utf8'");
$sql = "select * from user where email='".$email."' ";
$kq = mysqli_query($conn, $sql);

if($row = mysqli_fetch_array($kq)){
    $id = $row['id'];
    $name = $row['name'];
    $avatar = $row['avatar'];
    $_SESSION['user'] = $name;
    $_SESSION['id'] = $id;
    $_SESSION['avatar'] = $avatar;
    $_SESSION['email'] = $email;
    if($row['password'] == $password){
        header("location:index.php");
    } else {
        echo "incorrect username and password";
        require "login.php";
    }
}
?>