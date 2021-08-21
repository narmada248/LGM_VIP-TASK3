<?php require "common.php";?>
<?php
session_start();

if(isset($_SESSION['alert'])){
?>
<script>
    alert ("sudents detsils successfully addeded");
</script>
<?php
}
unset ($_SESSION['alert']);
?>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

<div class="wrapper">
    <div class="sidebar">
        <h2>Rgukt</h2>
        <ul>
            <li><a href="dashboard.php" ><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
            <li style="background-color:#594f8d;"><a href="#"><i class="fas fa-project-diagram"></i>Results</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Settings</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact </a></li>
            <li><a href="logout_script.php"><i class="fas fa-map-pin"></i>logout</a></li>
        </ul> 
        
    </div>
    <div class="main_content">
        <div class="header" >Welcome</div>  
    </div>
    <div class="check">
        
    </div>
    <div class="container decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                         <h2>New Student</h2>
                         <form method="POST" action="insert.php" >
                             <div class="form-group">
                                 <input class="form-control" placeholder="Roll no" name="roll-no" required>
                             </div>
                             <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" required>
                            </div>
                            <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Student password to login"  name="password" required>
                             </div>
                             <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Marks in  maths" name="maths" required>
                             </div>
                             <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Marks in  java" name="java" required>
                             </div>
                             <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Marks in  python"  name="python" required>
                             </div>
                             <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Marks in  data structures" name="data-structures" required>
                             </div>
                             <div class="form-group">
                                <input type="text" class="form-control" placeholder="Marks in  english" name="english" required>
                             </div>
                             <div class="form-group">
                                <input type="text" class="form-control" placeholder="GPA" name="gpa" required>
                             </div>
                             <button type="submit" name="submit" class="btn btn-primary" id="button-1">Submit</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
 

</div>
