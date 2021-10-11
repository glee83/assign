<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic pages</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body >
    <form class="p-2" action="signup.php" method="POST" >
        <h3 class="p-1 mb-3 text-center" > Hello, please Sign-up</h3>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-5" >
            <span class="float-end">Already have an account? 
                <a href="#" class="text-primary">login</a>
            </span>
        </div>
        
        <button type="submit" class="btn btn-primary mx-auto ml-5">Submit</button>
    </form>

    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>