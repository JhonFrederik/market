<?php
include_once("../config/cnx_db.php"); 
$userid =$_GET['id'];
$sql="DELETE FROM users WHERE id ='$userid'";
$sql2 = "SELECT * FROM users Where id='$userid'";
if($conn->query($sql)===TRUE){
    echo "<script>alert('user has been deleted ')</script>";
    header("refresh:0;url=http://127.0.0.1/Market/back/users/list_user.php");
}else{
    echo "error: user hasn't been delete";
    echo "error:".$conn->error;
}
?>