<?php
session_start();
session_destroy();
header("Location: ../adminstration/administration.php");
?>