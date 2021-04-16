<?php
    include '_database/database.php';
  

   $sql = "SELECT COUNT(Article_id) FROM article";
   
   $result = mysqli_query($database,$sql) or die(mysqli_error($database));
   while($rws = mysqli_fetch_array($result)){ 
       $nima=$rws['COUNT(Article_id)'];
       
        $qanaqa=rand(1,$nima);
    
       
        }?>