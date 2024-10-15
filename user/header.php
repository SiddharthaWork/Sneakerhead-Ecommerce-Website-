<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="./images/logo.png" type="image/svg+xml">

  <!-- import the CSS file in HTML -->
  <link rel="stylesheet" href="css/style.css">

  <!--Icon font link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <title>Sneakerhead</title>
  <?php
    session_start();
  ?>
</head>

<body>
<?php
  $count = 0;
  if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']); //use for number of click in the cart


  }

  ?>
  <!--Header Section Start -->
  <section id="header" class="header">
    <a href="#" class="logo"><i class=""></i><img src="images/sneakerhead.png" alt="logo" width="220" height="70"> </a>

    <nav class="navbar">
      <a href="index.php" class="text-decoration-none">Home</a>
      <a href="#" class="text-decoration-none">Hello,</a>

      <?php
      if(isset($_SESSION['user'])){
        echo '<span class="fa-solid fa-user" style="font-size: 20px; margin-right:20px;">' . $_SESSION['user'] . '</span>';
      echo"
        <a href='form/logout.php'><i class='fa fa-unlock-alt' aria-hidden='true'></i> Sign Out </a>
      ";
    }
      else{
        echo"
      <a href='form/login.php'><i class='fa fa-unlock-alt' aria-hidden='true'></i> Sign In </a>
        ";
      }

      ?>
      <!-- <a href="#about">About</a>
      <a href="#contact">Contact</a>
      <a href="#category">Category</a>
      <a href="#shop">Shop</a> -->
      <!-- <a href='form/login.php'><i class='fa fa-unlock-alt' aria-hidden='true'></i> Sign In </a>
      <a href='form/logout.php'><i class='fa fa-unlock-alt' aria-hidden='true'></i> Sign Out </a> -->

      </li>
      </ul>

    </nav>
    <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
       <a href="../admin/mystore.php" class="fa-solid fa-lock"></a>
       <a href = "../user/viewCart.php"><i class="fas fa-shopping-cart">Cart <?php echo $count?></i></a>
       

    </div>

  </section>
  <!-- header section ends -->

  <!-- Home section starts -->
  <section class="home" id="home">
    <!-- 1-->
    <div class="slide active"
      style="background: url(./images/jumia.gif) no-repeat; background-size: cover; background-position: center;">
      <div class="content">
        <span>Welcome to Sneakerhead</span>
        <h3>Step Up Your Style Game</h3>
        <!-- <a href="#" class="btn">read more</a> -->
      </div>
    </div>
  </section>
  <marquee behavior="slide" direction="left" scrollamount="20" loop="infinite"><h1 style=" text-align: center; font-weight: bold; color:#e60000; font-family: 'Arial Black', sans-serif; font-size: 32px; ">Your Style Your Brand</h1></marquee>
     <nav style="background-color: black; display: flex; justify-content: center;">
          <ul style="list-style-type: none; margin: 0; padding: 0; display: flex;">
            <li style="display: flex;">
              <a href="Nike.php" style="display: flex; align-items: center; padding: 10px 20px; text-decoration: none; color: white; font-size: 20px">Nike</a>
            </li>
            <li style="display: flex;">
              <a href="Balenciaga.php" style="display: flex; align-items: center; padding: 10px 20px; text-decoration: none; color: white; font-size: 20px">Balenciaga</a>
            </li>
            <li style="display: flex;">
              <a href="Converse.php" style="display: flex; align-items: center; padding: 10px 20px; text-decoration: none; color: white; font-size: 20px">Converse</a>
            </li>
          </ul>
        </nav>
    <!--link of javascript file-->
    <script src="app.js"></script>
</body>

</html>