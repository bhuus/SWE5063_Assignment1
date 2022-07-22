<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWE5063 - Assignment 1</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        @font-face {
            font-family: Tropical;
            src: url("./fonts/Tropical Sweet Italic ttf.ttf");
        }

        .blue-fade {
        font-size: 69px;
        font-family: Tropical;
        font-weight: 100;
        background: -webkit-linear-gradient(#20BF55,#0CBABA);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand blue-fade" style="font-size: 20px" href="./index.php">Cheap Tweets</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="./aboutUs.php#">About Cheap Tweets</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Products
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./charbar.php#">Charbar</a></li>
                <li><a class="dropdown-item" href="./pollyPop.php#">Polly Pop</a></li>
                <li><a class="dropdown-item" href="./Lulupoo.php#">Lulupoo</a></li>
                <li><a class="dropdown-item" href="./crackers.php#">Squawkers</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- Jumobtron -->
    <div style="background-image: url('./images/testBack2.jpg');  background-repeat: no-repeat; background-attachment: fixed;  background-position: center;" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="blue-fade display-4 font-weight-normal text-muted">Welcome to Cheap Tweets</h1>
        <p class="lead font-weight-normal text-white">Taking care of exotic birds can be expensive! Don't settle for bird snacks with overpriced, low grade ingredients. Go with Cheap Tweets!</p>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>

    <!-- Products-->
    <div class="d-md-flex flex-md-equal w-100 col-md-6">
        <!-- Product 1 -->
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 col-md-3 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <a class="display-5 blue-fade" href="./pollyPop.php#">Polly Pop</a>
          <p class="lead">A fun snack for you birds!</p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="./images/PopcornHead.jpg" style="height:100%; width:100%; max-height:300px; max-width:300px; min-width:200px">
        </div>
      </div>
      <!-- Product 2 -->
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 col-md-3 text-center overflow-hidden">
        <div class="my-3 p-3">
        <a class="display-5 blue-fade" href="./Lulupoo.php#">Lulupoo</a>
          <p class="lead">Made with probiotics for a healthy parrot gut!</p>
        </div>
        <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="./images/milletYellow.jpg" style="height:100%; width:100%; max-height:300px; max-width:300px; min-width:200px">
        </div>
      </div>
    
    <!-- Products-->
    <div class="d-md-flex flex-md-equal w-100 col-md-6" style="display: inline-block;">
        <!-- Product 3 -->
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 col-md-3 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
        <a class="display-5 blue-fade" href="./charbar.php#">Charbars</a>
          <p class="lead">A delicious fruit and nut bar!</p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="./images/charbar.jpg" style="height:100%; width:100%; max-height:300px; max-width:300px; min-width:200px">
        </div>
      </div>
      <!-- Product 4 -->
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 col-md-3 text-center overflow-hidden">
        <div class="my-3 p-3">
          <a class="display-5 blue-fade" href="./crackers.php#">Squawkers</a>
          <p class="lead">View our large assortment of crackers for all bird sizes!</p>
        </div>
        <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="./images/crackers.jpg" style="height:100%; width:100%; max-height:300px; max-width:300px; min-width:200px">
        </div>
      </div>
      


    

    <!-- Bootstrap JS CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>


</body>
</html>