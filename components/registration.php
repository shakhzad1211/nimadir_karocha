<?php
    session_start();
    include '../_database/database.php';
    if(isset($_REQUEST['signup_button'])){
        $user_email=$_REQUEST['user_email'];
        $user_firstname=$_REQUEST['user_firstname'];
        $user_lastname=$_REQUEST['user_lastname'];
        $user_username=$_REQUEST['user_username'];
        $user_password=$_REQUEST['user_password'];
        $sql="INSERT INTO author(FName,LName,Email,Author_username,user_data,User_password) VALUES('$user_firstname','$user_lastname','$user_email','$user_username',CURRENT_TIMESTAMP,'$user_password')";
        mysqli_query($database,$sql) or die(mysqli_error($database));
        $_SESSION['user_username'] = $user_username;
        header('Location: ../update-profile-after-registration.php?user_username='.$user_username);
    }
?>