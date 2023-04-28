<?php
    //developer: Frederik Rosero
    //database engine connection
    //credentials
    $host = "localhost"; //127.0.0.1
    $port = "3306";
    $username = "root";
    $password = "";
    $dbname = "market";
    //Mysql conncetion 
    $conn = new mysqli($host,$username,$password,$dbname,$port);
    //Check connection
    if($conn->connect_error){
        die("Connection failed: ". $conn->connection_error);
    
    }else{
        echo "Connection Succeessfully";
    }
?>