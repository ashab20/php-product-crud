<?php 
require('../connection.php');
$id = $_GET['id'];

$sql = "DELETE from products where product_id=$id";
$connect->query($sql);
if($connect->error){
    $_SESSION['save']= $connect->error;
}else{

    $_SESSION['save'] = "Data Deleted";
}


header("location:$baseurl");
?>