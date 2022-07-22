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

    <!-- Box 1 -->
    <div style="padding:20px;" class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
            <h1 class="blue-fade">Lulupoo</h1>
            <p class="lead">This line of treats are named after our bird Louie, who will eat just about anything! That's why it's incredibly important to make sure she's digesting her food properly. Our Lulupoo millet line is infused with probiotics to ensure your parrot is in good digestive health!</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
        </div>
        </div>
    </div>

    <!-- Images -->
    <div class="row align-items-md-stretch" style="padding:20px;">
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3" style="background-image: url('./images/budgie_millet.jpg');background-size:cover; background-repeat: no-repeat; min-height:500px;">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-light rounded-3" style="background-image: url('./images/millet.jpg'); background-size:cover; background-repeat: no-repeat; min-height:500px;">
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>