<!-- *** Create Product -->
<?php 
require("../connection.php");
if(isset($_POST)){
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $md = $_POST['md'];
    $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO products SET product_name='$product_name', price=$price, qty=$qty, manufature_time='$md', created_at='$created_at'";
    
    $save = $connect ->query($sql);
    if($connect->error){
        $_SESSION['save']= $connect->error;
    }else{

        $_SESSION['save'] = "Data Saved";
    }


    header("location:$baseurl");
}
?>