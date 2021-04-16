<?php
    // session_start();
    include '../_database/database.php';
    if(isset($_REQUEST['input_button'])){
        $article=$_REQUEST['article1'];
       
        $sql="INSERT INTO article(Article_id,Theme, Text_article, Data_published) VALUES('men','sen','$article',CURRENT_DATE)";
        mysqli_query($database,$sql) or die(mysqli_error($database));
       
    }
?>