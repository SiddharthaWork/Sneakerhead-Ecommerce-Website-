<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php
        include 'header.php';

    ?>
</head>
<body>
    <div class="container-fluid">
    <div class="col-md-12">
    <div class="row">
    <h1 class="text-danger font-monospace text-center my-3">Home</h1>
    <?php
    include 'config.php';
    $Record = mysqli_query($con,"select * from tblproduct");
    while($row=mysqli_fetch_array($Record)){
        $check_page = $row['PCategory']; //to specify the category
        // if(  $check_page ==='Home'){

    echo "
    <div class='col-md-6 col-lg-4 m-auto mb-3 '>
    <form action = 'Insertcart.php' method='POST'>
    <div class='card m-auto' style='width: 25rem;'>
    <img src='../admin/product/$row[Image]' class='card-img-top'>
    <div class='card-body text-center '>
      <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
      <p class='card-text'>Rs $row[PPrice]</p>
      <input type = 'hidden' name = 'PName' value = '$row[PName]' >
      <input type = 'hidden' name = 'PPrice' value = '$row[PPrice]' >
      <input type='number' name='PQuantity' value ='min = '1'  max = '20'' placeholder = 'Quantity'><br><br>
      <input type='submit' name = 'addCart' class = 'btn btn-danger text-white w-100' value='Add to Cart'>
      </div>
      </div>
      </form>
      </div>
            ";
 
        }

       
?> 

</div>
</div>
</div>
</body>
</html>