<?php

    // require('./db/users.php');

    // if(isset($_POST['name'],$_POST['password'])){
    //     User::addUser($_POST['name'],$_POST['password']);
    //     header('location:index.php');
    // }else{
    //     echo " failed";
    // }

    session_start();

    $connect = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connect, 'users');

    $name = $_POST['name'];
    $pass = $_POST['password'];

    $query = "select * from user where name = '$name'";
    $result = mysqli_query($connect, $query);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "name already exist";
    }else{
        $reg = "insert into user(name, password) values ('$name',' $pass')";
        mysqli_query($connect, $reg);
        echo "successful";
        header("location: /view/index.php");
    }

?>