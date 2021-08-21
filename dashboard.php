<?php

session_start();
require "common.php";
if($_SESSION['is_login']){
}
else{
 header("Location: ../student/student.php");
} ?>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link rel="stylesheet" href="style.css">
<div class="wrapper">
    <div class="sidebar">
        <h2>Rgukt</h2>
        <ul>
            <li><a href="#" ><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
            <li><a href="results.php"><i class="fas fa-project-diagram"></i>Students</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Settings</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact </a></li>
            <li><a href="logout_script.php"><i class="fas fa-map-pin"></i>logout</a></li>
        </ul> 
        
    </div>
    <div class="main_content">
        <div class="header">Welcome!! Have a nice day.</div>  
    </div>
    