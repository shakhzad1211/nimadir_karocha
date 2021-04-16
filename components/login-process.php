<?php
    session_start();
    if(isset($_REQUEST['login_button'])){
        require '../_database/database.php';
        $errmsg_arr = array();
        $errflag = false;
        $username=  mysqli_real_escape_string($database,$_REQUEST['username']);
        $password=  mysqli_real_escape_string($database,$_REQUEST['password']);
        if($username == '') {
            $errmsg_arr[] = 'Username missing';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'Password missing';
            $errflag = true;
        }
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: authentication-check.php");
            exit();
        }
        $sql="SELECT Author_username,User_password FROM author WHERE Author_username='$username'AND User_password='$password'";
        $result=mysqli_query($database,$sql) or die(mysqli_errno($database));
        $trws= mysqli_num_rows($result);
        if($trws==1){
            $rws=  mysqli_fetch_array($result);
            $_SESSION['Author_username']=$rws['Author_username'];
            $_SESSION['User_password']=$rws['User_password'];
            header("location:../home.php?user_username=$username&request=login&status=success");    
        }
        else {
            $errmsg_arr[] = 'user name and password not found';
            $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
                header("location: ../components/authentication-check.php");
                exit();
            }
        }
    }
?>