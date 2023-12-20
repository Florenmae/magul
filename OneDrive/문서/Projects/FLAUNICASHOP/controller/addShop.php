<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $shop = $_POST['size'];
       
         $insert = mysqli_query($conn,"INSERT INTO shop
         (shop_name)   VALUES ('$shop')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?shop=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?shop=success");
         }
     
    }
        
?>