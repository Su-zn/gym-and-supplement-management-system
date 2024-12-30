<?php 
include('navbar1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="images\fishoil.jpg" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">Fish oil</h5>
                <p class="card-text">Price: Rs.2000</p>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</a>
                <input type="hidden" name="Item_name" value="fishoil">
                <input type="hidden" name="price" value="2000">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="images\c4 pre workout.jpg" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">C4 Pre-workout</h5>
                <p class="card-text">Price: Rs.4000</p>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</a>
                <input type="hidden" name="Item_name" value="C4 Pre-workout">
                <input type="hidden" name="price" value="4000">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="images\wheygold.jpg" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">Whey protein</h5>
                <p class="card-text">Price: Rs.5500</p>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</a>
                <input type="hidden" name="Item_name" value="whey protein">
                <input type="hidden" name="price" value="5500">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="images\amino.jpg" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">Amino Energy</h5>
                <p class="card-text">Price: Rs.5500</p>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</a>
                <input type="hidden" name="Item_name" value="Amino Energy">
                <input type="hidden" name="price" value="4800">
              </div>
            </div>
          </form>
          <br>
          <br>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="images\Vitamin B.jpg" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">Vitamin B</h5>
                <p class="card-text">Price: Rs.5500</p>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</a>
                <input type="hidden" name="Item_name" value="Vitamin B">
                <input type="hidden" name="price" value="4800">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>