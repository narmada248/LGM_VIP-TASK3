<?php require "common.php";?>
<?php
session_start();
$rollno=$_GET['recordId'];
$query ="DELETE FROM `student_marks` WHERE `student_marks`.`roll_no` = '$rollno;'";
$data=mysqli_query($con,$query) or die(mysqli_error($data));
if($data){
echo "done";
$_SESSION['TEST']=test;
header("Location:results.php");
}
else{
    echo "no";
}
?>