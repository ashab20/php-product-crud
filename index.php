<?php
require('./connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 px-4 mx-4">
                <div>
                    <p>
                        <?php 
                        if(isset($_SESSION['save'])){
                            echo $_SESSION['save'];
                            unset($_SESSION['save']);
                        }
                        ?>
                    </p>
                    <a class="btn btn-primary" href="<?= $baseurl ?>add_product.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
                </a>
                </div>
                    <table class="table">
                    <thead>
                        <th>#SL</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Manufacture Date</th>
                        <th>Upload Date</th>
                        <th>Modified</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM products";
                            $data = $connect-> query($sql);
                            $sl=1;
                            if($data -> num_rows > 0){
                                while($row = $data -> fetch_object()){

                            ?>
                            <tr>
                                <td><?= $sl++?></td>
                                <td><?= $row->product_name ?></td>
                                <td><?= $row->price ?>tk</td>
                                <td><?= $row->qty ?></td>
                                <td><?= $row->manufature_time  ?></td>
                                <td><?= $row->created_at ?></td>
                                <td><?= $row->modified ?></td>
                                <td>
                                    <a 
                                    class="btn btn-info"
                                    href="<?= $baseurl ?>/update_product.php?id=<?= $row -> product_id ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
                                </a>
                                    <a 
                                    class="btn btn-danger"
                                    onclick="confirm('Are you sure?');"
                                    href="<?= $baseurl ?>controller/delete.php?id=<?= $row -> product_id  ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg>
                                </a>
                                </td>
                                
                        </tr>
                        <?php }
                            }else{ 
                            ?>
                            <tr>
                                <td colspan="7"><?= "There is no data" ?></td>
                            </tr>
    <?php } ?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>