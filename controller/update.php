<?php 
require("../connection.php");
if(isset($_POST)){
    $product_name = $_POST['product_name'];
    $product_id = $_POST['product_id'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $md = $_POST['md'];
    $created_at = date('Y-m-d H:i:s');

    $sql = "UPDATE products SET product_name='$product_name', price=$price, qty=$qty, manufature_time='$md' , modified ='$created_at' WHERE product_id=$product_id";
    
    $save = $connect ->query($sql);
    if($connect->error){
        echo  $connect->error;
    }else{

        $_SESSION['save'] = "Data Saved";
    }


    header("location:$baseurl");
}
?>