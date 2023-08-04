<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModaRoza /Home page</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Playfair&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> <!--bootstrap-->
</head>
<body>
    
    <?php
    include_once "nav.php"
    ?>
 

 
 


<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="photos/s11.PNG" class="d-block w-100" alt="photos/sdasdas.PNG">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="photos/s2.PNG" class="d-block w-100" alt="photos/sdasdas.PNG">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="photos/s3.PNG" class="d-block w-100" alt="photos/sdasdas.PNG">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>





<div id="wel"></div><br><br>
<img id="wel" src="photos/s13.png" class="img-fluid rounded float-start" alt="..." >
<div class="flo">
<b  class="wel" style="font-size:40px">Welcome to ModaRoza</b><br> your ultimate destination for fashion-forward individuals seeking the latest trends and styles. Our website is a curated haven for those who dare to be bold, expressive, and unapologetically themselves. At ModaRoza, we believe that fashion is not just about clothing; it's an art form that empowers and uplifts.
</div>

<div id="wel2"></div><br><br>
<img src="photos/s12.png" class="img-fluid rounded float-end" alt="..." >
<div class="flo">
<b class="wel" style="font-size:40px">Our Aspirations</b><br> We aim to provide a seamless shopping experience, from browsing through our thoughtfully designed website to the moment your package arrives at your doorstep. Our dedicated support team is always ready to assist with any queries or concerns you may have, ensuring your satisfaction is our top priority.
</div>

<div class="content" id="content">
    <h1>You can add your product</h1>
    <p>Your ultimate destination for fashion-forward individuals seeking the latest trends and styles.</p>  
</div>









<div id="form">
<form action="table.php" method="get" enctype="multipart/form-data">
   <div class="mb-3">
    <label class="form-label" for="name"> Product Name</label> 
    <input class="form-control" type="text" id="name" value = "" name="name" required> 
    </div>


    <div class="mb-3"></div>
    <label class="form-label" for="price"> Product Price</label> 
    <input class="form-control" type="text" id="price" value = "" name="price" required>
    
    <div class="mb-3">
    <label class="form-label" for="Details"> Product Details</Details></label> 
    <input class="form-control" type="text" id="Details" value = "" name="details" required>
    </div>

    
    <div class="mb-3">
    <span>Product availability</span> <br>
    <input class="form-check-input"  type="radio" name="ava" value="available" id="available" required>
    <label for="available">available</label>

    <input class="form-check-input" type="radio" name="ava" value="notavailable" id="notavailable" required>
    <label for="notavailable">not available</label> 
    </div>



    <div class="mb-3">
    <label class="form-label" for="dateInput">Added Date</label> 
    <input class="form-control" type="date" id="dateInput" name="dateInput" value="<?php echo date('Y-m-d'); ?>">
    </div>


    <div class="mb-3">
    <label class="form-label" for="photo"> Product Photo</label> 
    <input class="form-control" type="file" name="photo" value= "'s1.PNG'"><br>
    </div>

    <button class="btn"> Add </button>
</form>

<form action="" method="get">
    <button class="btn" name="del"> clear all </button>
</form>
<?php
if (isset($_GET['del'])) {
    session_unset();
    $_SESSION['products'] = array();
}?>

<form action="Product.php">
    <button class="btn" name="view" > View all </button>
</form>
</div>

<div id="table"></div><br><br><br><br><br>
<div></div>
<div class="table-responsive-md">
<table class="table">
        <head>
        <tr>
            <th class='td'>Product Name</th>
            <th class='td'>Product Price</th>
            <th class='td'>Product Details</th>
            <th class='td'>Product availability</th>
            <th class='td'>Added Date</th>
            <th class='td'>Product Photo</th>
            <th class='td'>Delete Item</th>
        </tr>
    </head>
    <body>
        <?php
        if (!isset($_SESSION['products'])) {
            $_SESSION['products'] = array();
        };
        $p=0; 
         foreach ($_SESSION['products'] as $key => $product) {
            if (empty($product['photo'])) {
                $product['photo']='s10.PNG';
            }
            
            echo "<tr class='td'>";
            echo "<td class='td'>" . $product['name'] . "</td>";
            echo "<td class='td'>" . $product['price'] . "</td>";
            echo "<td class='td'>" . $product['details'] . "</td>";
            echo "<td class='td'>" . $product['ava'] . "</td>";
            echo "<td class='td'>" . $product['dateInput'] . "</td>";
            echo '<td class="td"> <img src="photos/'.$product['photo'] . '"alt="product photo" width="100px"></td>';
            echo '<td>
            <form action="" method="get">
            <input type="hidden" name="delete_key" value="' . $key . '">
            <button name="delete">Delete</button>
        </form>
                </td>';
             
            echo "</tr>";
         };
         if (isset($_GET['delete'])) {
            $delete_key = $_GET['delete_key'];
            unset($_SESSION['products'][$delete_key]);
            //header("Location: ".$_SERVER['PHP_SELF']);
            exit();
         }
        ?>
    </body>
    </table>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> <!--bootstrap-->
</body>
</html>

