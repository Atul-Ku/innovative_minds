<?php
    if(isset($_POST['password'])){
    $server="localhost";
    $username="root";
    $password="";
    // this will give you an indication of secure connection.//
    $conn=mysqli_connect($server,$username,$password);
    if(!$conn){
        die("connection to the database failed due to ". mysqli_connect_error());
    }
    $email= $_POST['email'];
    $password= $_POST['password'];
    // echo "sucess connection to the db";
    // first of s.no. should removed because it is autoincrement.//

    $sql= "INSERT INTO `avishkar`.`avishkar`(`email`,`password`,`dt`) VALUES (`$email`,`$password`, current_timestamp());";
    echo $sql;

    // now we are going to to execute every information to the database.//
    // '->' is object operator.//
    if($conn->query($sql) == true){
        echo "successfully inserted.";
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }

    $conn->close();
}