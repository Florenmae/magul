<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $product = $_POST['product'];
        $shop= $_POST['shop'];
        $stocks = $_POST['stocks'];

         $insert = mysqli_query($conn,"INSERT INTO product_details
         (product_id,shop_id,stocks) VALUES ('$product','$shop','$stocks')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?variation=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?variation=success");
         }
     
    }
        
?>