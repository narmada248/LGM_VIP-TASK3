<?php
session_start();
require "common.php";
$roll_no=$_POST['roll-no'];
$name=$_POST['name'];
$password=$_POST['password'];
$maths=$_POST['maths'];
$java=$_POST['java'];
$python=$_POST['python'];
$data_structures=$_POST['data-structures'];
$english=$_POST['english'];
$gpa=$_POST['gpa'];
$payment_details_query= "insert into student_marks(roll_no, name, password, Maths, java, python, data_structures, english, gpa) VALUES ('$roll_no', '$name', '$password','$maths','$java', '$python', '$data_structures', '$english', '$gpa')";
$payment_details_submit= mysqli_query($con, $payment_details_query) or die(mysqli_error($con));
if($payment_details_query){
    $_SESSION['alert']="hi";
 header("Location:../dashboard-2/results.php");
}
else{
die(mysqli_error($payment_details_query));
}

?>