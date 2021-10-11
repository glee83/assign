<?php

    require('./db/users.php');

    if(isset($_POST['name'],$_POST['password'])){
        User::addUser($_POST['name'],$_POST['password']);
        header('location:index.php');
    }else{
        echo " failed";
    }

?>