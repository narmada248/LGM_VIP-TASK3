<?php
session_start();
require "common.php";
$_Year=$_POST['year'];
$_Sem=$_POST['sem'];
$_SESSION['year']=$_Year;
$_SESSION['sem']=$_Sem;
$_roll_no= $_SESSION['roll_no'];
$query=("select * from student_marks where roll_no='$_roll_no'");
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$cou=mysqli_num_rows($result);
if($cou)
{
    $_SESSION['true']="hi";
    header("Location:results.php");
}

?>