<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header class="h-100 w-100">
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container w-75 d-flex justify-content">
                <a class="navbar-brand flex-1" href="#">GleeBert</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  " id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Auth</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container w-75 d-flex justify-content-center">
            <div class="container jumbotron">
                <h1 p-1 mb-2> Hello, welcome to my site.</h1>
                <p>I'am full stack web developer at Seven Advance Academy. First class IT school</p>
                <button class="btn btn-primary">Get started</button> 
                <button class="btn btn-secondary">Read more</button> 

            </div>

            <div class="image-container">
                <img src="./../image/1.jpg" alt="" class="rounded w-50 float-end">
            </div>
        </div>
    </header>

    <script src="./../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>