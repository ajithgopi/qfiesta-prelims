<?php
    require_once("includes/connection.php");
    if(isset($_SESSION['u'])){
        header("location:quiz.php");
    }
    else{
        header("location:register.php");
    }
?>