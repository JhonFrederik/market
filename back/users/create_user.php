<?php
    include("../config/cnx_db.php");
    $firstName = $_POST['first_name'];
    $last_Name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO users (first_name, last_name, email, password) 
    VALUES ('$firstName', '$last_Name', '$email', '$password')";
    //$conn -> query($sql);
    if($conn->query($sql)===TRUE){
        echo "<script>alert('User has been created succesfully')</script>";
        header("refresh:0;url=http://127.0.0.1/market/front/login.html");
    }else{
        echo "<script>alert('email already exist')</script>";
        header("refresh:0;url=http://127.0.0.1/market/back/users/create_user.php");
    }
?>