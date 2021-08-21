<?php
session_start();
require "common.php";
$_username=$_POST['username'];
$_password=$_POST['password'];
$query=("SELECT * FROM `admin-login`  where name='$_username' and password='$_password'");
$result=mysqli_query($con,$query) or die(mysqli_error($con));
 $cou=mysqli_num_rows($result);
    if($cou>0)
     {
     $_SESSION['is_login'] = true;
     header("Location: ../dashboard-2/dashboard.php");
     }
     else{
     echo "user not found please signup";
     }

?>