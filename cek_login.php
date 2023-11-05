<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="sendi" AND $password=="123456")
    {
        $_SESSION["username"]=$username;
        header("location:home_admin.php");
    }else{
        header("location:form_login.php?login_error");
        }
    ?>