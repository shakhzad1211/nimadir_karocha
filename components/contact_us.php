<?php
    session_start();
    include '../_database/database.php';
    if(isset($_REQUEST['send_message'])){
        $contact_name=$_REQUEST['name'];
        $contact_email=$_REQUEST['email'];
        $contact_subject=$_REQUEST['subject'];
        $contact_text=$_REQUEST['message'];
        // $sqlq="SELECT * FROM author";

        $sql="INSERT INTO contact( `email`, `name`, `subject`,`message`,`data_send`) VALUES('$contact_email','$contact_name','$contact_subject','$contact_text',CURRENT_TIMESTAMP)";

        mysqli_query($database,$sql) or die(mysqli_error($database));
        header("location: ../success1.php");

    }
    else die(mysqli_error($database))


?>