<?php 

    class User {
        
        public static function data(){
            $data = new PDO('mysql:host=localhost;dbname=users', 'root','');

            $data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $data;
        }

        public static function addUser($name, $password){
            $data=User::data();

            $sql="INSERT INTO `user`(`id`, `name`, `password`) VALUES(null,?,?)";
            $query=$data->prepare($sql);
            $query->execute([$name, $password]);
            $query->closeCursor();

            echo 'successful';
        }
    }
?>