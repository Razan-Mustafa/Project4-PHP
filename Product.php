<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> <!--bootstrap-->

</head>
<body>

<?php
include_once "nav.php"
?>

  <div id="bigdiv" class="row row-cols-1 row-cols-lg-3 g-4 row-cols-md-2">
  <?php 
session_start();
foreach ($_SESSION['products'] as $product) {
  if (empty ($product['photo'])) {
    $product['photo'] = "s10.png";
};
  echo '<div class="col">
          <div class="card h-100">
              <img src="photos/' . $product['photo'] . '" class="card-img-top" alt="product photo"  height="300px">
              <div class="card-body">
                  <h4 id="head"  class="card-title"> '. $product['name'] .'</h4>
                  <h6 class="card-title">Price: '. $product['price'] .'</h6>
                  <p class="card-text">Details: '. $product['details'] .'<br><br>Product availability: <em>'. $product['ava'] .'</em></p>
              </div>
              <div class="card-footer">
                  <small class="text-body-secondary">Last updated '. $product['dateInput'] .'</small>
              </div>
          </div>
      </div>';
}
      ?>
  </div>

  <form action="Home.php">
    <button class="btn" name="home" > back to home </button>
  </form>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> <!--bootstrap-->



</body>
<footer>
  <?php
    include_once "footer.php"
  ?>
</footer>
</html>