<?php
//login o sing in
include("C:\xampp\htdocs\market\back\config\cnx_db.php");
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
$result = $conn -> query($sql); 
if($result->num_rows > 0){
    //echo "User has been  found successfull. you're login";
    //header("location: http://127.0.0.1/market/front/login.html");
    //echo "<script>alert('User has been created succesfully')</script>";
    header("location:http://127.0.0.1/market/front/home.html");
}else{
    echo "<script>alert('user doesn't exist')</script>";
    header("refresh:0;url=http://127.0.0.1/market/front/login.html");
}
?>
<!---->