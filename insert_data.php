<?php
include 'dbcon.php';

if (isset($_POST['add_product'])){
    
        $productname = $_POST['productname'];
        $productdetails = $_POST['productdetails'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        
       

        if($productname == "" || empty($productname)){
            header('location:index.php?message=You need to fill in the product');
        }

        else{
              $query = "insert into `products` (`product` , `productdetails`, `category` , `price`) values ('$productname' , '$productdetails' , '$category' , '$price' )"; 
              
              $query = mysqli_query($connection,$query);

              if($result){
                die("Query Failed".mysqli_error());
              }

              else{
                header('location:index.php?insert_msg=You data has beed added succesfully');
              }

        }

}


?>