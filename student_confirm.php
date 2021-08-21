<?php
session_start();
require "common.php";
$_username=$_POST['username'];
$_password=$_POST['password'];
$_SESSION['roll_no'] = $_username;
$query=("select * from student_marks where roll_no='$_username' and password='$_password'");
 $result=mysqli_query($con,$query) or die(mysqli_error($con));
 $cou=mysqli_num_rows($result);
    if($cou>0)
     {
     $_SESSION['is_login'] = true;
     header("Location: ../dashboard/dashboard.php");
     }
     else{
     echo "user not found please signup";
     }

?>