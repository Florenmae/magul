<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM shop where shop_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Shop Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>