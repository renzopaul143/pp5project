

<?php include('header.php');?>
<?php include('dbcon.php');?>



<h2>ADMIN DASHBOARD</h2>
<!-- cards 1 -->
 <div class="box2">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
   
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
     
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
<!-- end of cards 1 -->

<!-- cards 2 -->
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
     
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
   
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
<!-- end of cards 2 -->

</div>







<div class="box1">
            <h2>ALL PRODUCTS</h2>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD PRODUCTS
</button>
</div>






          
<!-- display tables in index -->
<table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PRODUCT NAME</th>
                        <th>PRODUCT DETAILS</th>
                        <th>CATEGORY</th>
                        <th>PRICE</th>
                        <th>ACTION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>    
                <tbody>

                    <?php

                    $query = "select * from `products`";

                    $result = mysqli_query($connection, $query);

                    if(!$result){
                        die("query Failed" .mysqli_error());
                    }
                    else{
                       while($row = mysqli_fetch_assoc($result)){
                  ?>
                <tr>
                       <td><?php echo $row['id']; ?></td>
                       <td><?php echo $row['product']; ?></td>
                       <td><?php echo $row['productdetails']; ?></td>
                       <td><?php echo $row['category']; ?><br></td>
                       <td><?php echo $row['price']; ?> ₱</td>
                       <td><a href="update_page.php?id=<?php echo $row['id']; ?>" class="btn btn-success" >Edit</a></td>
                       <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>   

                            <?php
                       }
                    }


                    ?>

                  


                   
                    
                  

                </tbody>
</table>


<!-- Modal -->
<form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD PRODUCTS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form>
            <div class="form-group">
            <label for="productname">Product Name</label>
            <input type="text" name="productname" class="form-control">
            </div>
            <div class="form-group">
            <label for="productdetails">Product Details</label>
            <input type="text" name="productdetails" class="form-control">
            </div>
            <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" class="form-control">
            </div>
            <div class="form-group">
            <label for="price"> Price</label>
            <input type="number" name="price" class="form-control" min="0" step="1" >
            </div><br>
            
  
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_product" value="ADD">
      </div>
    </div>
  </div>
</div>
</form> 






<!-- message in add -->
            <?php
              if(isset($_GET['message'])){
                    echo"<h6>".$_GET['message']."</h6>";

              }
            ?>
<!-- message in update -->
          <?php
              if(isset($_GET['update_msg'])){
                    echo"<h6>".$_GET['update_msg']."</h6>";

              }
           ?>

<!-- message in delete -->
          <?php
              if(isset($_GET['delete_msg'])){
                    echo"<h6>".$_GET['delete_msg']."</h6>";

              }
           ?>
<br><br>

<?php include('footer.php');?>