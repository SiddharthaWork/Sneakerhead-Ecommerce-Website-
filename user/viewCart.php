<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <?php
  include 'header.php';
  ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center md-5">
        <h1 class="" style=" text-align: center; font-weight: bold; color:#e60000; font-family: 'Arial Black', sans-serif; font-size: 32px; ">My Cart</h1>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-sm-12 col-md-6 col-lg-9">
        <table class="table table-bordered text-center">
          <thead>
            <th>Serial no
            <th>
            <th>Product Name
            <th>
            <th>Product Price
            <th>
            <th>Product Quantity
            <th>
            <th>Total Price
            <th>
            <th>Update
            <th>
            <th>Delete
            <th>
          </thead>
          <tbody>
            <?php
            $subtotal = 0;
            $ptotal = 0;
            if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $key => $value) {
                $ptotal = intval($value['productPrice']) * intval($value['productQuantity']);
                $subtotal += intval($value['productPrice']) * intval($value['productQuantity']);
                $_SESSION['subtotal'] = $subtotal;

                echo "
    <form action='insertcart.php' method='POST'>
    <tr>
        <td>$key</td>
        <td></td>
        <td><input type='hidden' name='Pname' value='" . $value['productName'] . "' style='color: black'>" . $value['productName'] . "</td>
        <td></td>
        <td><input type='hidden' name='PPrice' value='" . $value['productPrice'] . "'>" . $value['productPrice'] . "</td>
        <td></td>
        <td><input type='text' name='PQuantity' value='" . $value['productQuantity'] . "' class='text-center'></td>
        <td></td>
        <td>$ptotal</td>
        <td></td>
        <td><button style='background-color: blue; color: white;' name='update' >Update</button></td>
        <td></td>
        <td><button button style='background-color: red; color: white;' name='remove'>Delete</button></td>
        <td><input type='hidden' name='item' value='" . $value['productName'] . "'></td>
    </tr>
    </form>";


              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col-lg-3">
        <h3>Total</h3>
        <h1>
          <?php echo $subtotal ?> 
        </h1>
      </div>
    </div>
  </div>
  <button style="background-color : red;"class=" fs-4 fw-bold my-5 form-control "><a href="billcheck.php"class="text-decoration-none text-white">Procced to Checkout</a></button>

</body>

</html>