<?php 
require("./connection.php");
$id = $_GET['id'];
$sql = "SELECT * FROM products";
$data = $connect-> query($sql);
if($data -> num_rows > 0){
    while($row = $data -> fetch_object()){
        $p_id = $row->product_id ;
        $p_name = $row->product_name ;
        $p_price = $row->price ;
        $p_qty = $row->qty ;
        $p_mt = $row->manufature_time;
        $p_created_at = $row->created_at;
        $p_modify = date("Y-m-d H:i:sA");
    }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add PRoduct</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 my-5">
            <a class="btn" href="<?= $baseurl ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
            </a>
                <form action="<?= $baseurl ?>/controller/update.php" name="add_product" method="POST">
                    <div class="form-group">
                        <label for="product">Product Id:</label>
                        <input type="number" readonly value="<?= $p_id ?>" name="product_id" class="form-control" id="product" >
                    </div>
                    <div class="form-group">
                        <label for="product">Product Name:</label>
                        <input type="text" value="<?= $p_name ?>" name="product_name" class="form-control" id="product" >
                    </div>
                    <div class="form-group">
                        <label for="price">Price: </label>
                        <input type="number" value="<?= $p_price ?>"  name="price" class="form-control" id="price">
                    </div>
                    <div class="form-group">
                        <label for="qty">Quantity: </label>
                        <input type="number" value="<?= $p_qty ?>"  name="qty" class="form-control" id="qty">
                    </div>
                    <div class="form-group">
                        <label for="md">Mafacture Date: </label>
                        <input type="date" value="<?= $p_mt ?>"  name="md" class="form-control" id="md">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>