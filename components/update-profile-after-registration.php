<?php
    session_start();
    $temp= $_SESSION['user_username'];
    ini_set("display_errors",1);
    if(isset($_POST)){
        require '../_database/database.php';
        session_start();
        $user_firstname=$_REQUEST['user_firstname'];
        $user_lastname=$_REQUEST['user_lastname'];
        $user_email=$_REQUEST['user_email'];
        $user_password=$_REQUEST['user_password'];
        $sql3="UPDATE author SET FName='$user_firstname',LName='$user_lastname',email='$user_email',user_password='$user_password' WHERE author_username = '$temp'";
        $user_username=$_SESSION['user_username'];
        $sql4="INSERT INTO author (FName,LName,email,user_password) VALUES ('$user_firstname','$user_lastname','$user_email','$user_password') WHERE user_username = $temp";
        $result = mysqli_query($database,"SELECT * FROM author WHERE Author_username = '$user_username'");
        if( mysqli_num_rows($result) > 0) {
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../update-bio-after-registration.php?user_username=$user_username&current_user=$user_username");
        }
        else{
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../update-bio-after-registration.php?user_username=$user_username&current_user=$user_username");
        }  
    }    
?>