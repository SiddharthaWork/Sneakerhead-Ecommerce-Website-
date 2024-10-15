<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">

                <p class="text-primary text-center fs-3 fw-bold my-3">User Login</p>
                <form action="login1.php" method="POST">

             <!-- mb is margin bottom -->
             <div class="mb-3">
                <label for="">UserName:</label>
                <input type="text" name="name"placeholder="Enter Username or Email" class="form-control">
             </div>
            
             <div class="mb-3">
                <label for="">UserPassword:</label>
                <input type="password" name="password" placeholder="Enter Password" class="form-control">
             </div>

             <div class="mb-3">
             <button name="submit" class=" w-100 bg-primary fs-4 text-white">LOGIN</button>
             </div>

             <div class="mb-3">
             <button class=" w-100 bg-black fs-4 text-white"><a href="register.php"class="text-decoration-none">REGISTER</a></button>
             </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>