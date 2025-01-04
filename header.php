<?php
@include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>header</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
<header class="header">
<div class="flex">
   <a href="#" class="logo">Potatos <img class="img-img" src="images/logo.png" alt=""> </a>
   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="services.php" >Services</a>
      <a href="admin.php">Products</a>
      <a href="products.php">view products</a>
   </nav>
   <?php
   $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
   $row_count = mysqli_num_rows($select_rows);
   ?>
   <a href="cart.php" class="cart"> <i class="fas fa-shopping-cart"></i>  <span><?php echo $row_count; ?></span> </a>

   <div id="menu-btn" class="fas fa-bars"></div>
   <nav class="navbar">
   <a  class="navbar" href="">Login</a>
   </nav>
</div>

</header>
</body>
</html>