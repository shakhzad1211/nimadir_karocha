<?php
    session_start();
    include '../_database/database.php';
    if(isset($_REQUEST['add-article'])){
        $article_theme=$_REQUEST['Theme'];
        $article_text=$_REQUEST['editor1'];
        $article_category=$_REQUEST['Category'];
        $article_author=$_REQUEST['Author'];
        // $sqlq="SELECT * FROM author";

        $sql="INSERT INTO article( `Theme`, `Text_article`, `Data_published`) VALUES('$article_theme','$article_text',CURRENT_TIMESTAMP)";

        mysqli_query($database,$sql) or die(mysqli_error($database));
        header("location: ../success.php");

    }
    else die(mysqli_error($database))


?>