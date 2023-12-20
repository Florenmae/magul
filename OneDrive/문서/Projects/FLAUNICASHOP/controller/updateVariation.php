<?php
    include_once "../config/dbconnect.php";

    $v_id=$_POST['v_id'];
    $product= $_POST['product'];
    $shop= $_POST['shop'];
    $stocks= $_POST['stocks'];
   
    $updateItem = mysqli_query($conn,"UPDATE product_details SET 
        product_id=$product, 
        shop_id=$shop,
        stocks=$stocks 
        WHERE variation_id=$v_id");


    if($updateItem)
    {
        echo "true";
    }
?>