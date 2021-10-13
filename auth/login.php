<?php

session_start();

$connect = mysqli_connect('localhost', 'root', '');
mysqli_select_db($connect, 'users');

$name = $_POST['name'];
$pass = $_POST['password'];

$query = "select * from user where name = '$name' && password = '$pass'";
$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);

if($num == 1){
    header("location: /view/index.php");
}else{
    header("location: /auth.php");
}


?>