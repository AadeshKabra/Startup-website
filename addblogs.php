<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "blogs";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css\all.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">Startup Engine</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="margin-left: 2em;">
                        <a class="nav-link " aria-current="page" href="indian.php">Home</a>
                    </li>


                    <li class="nav-item" style="margin-left: 2em;">
                        <a class="nav-link" href="localStartup.php"> Local-Startups</a>
                    </li>

                    <li class="nav-item" style="margin-left: 2em;">
                        <a class="nav-link" href="nationalStartup.php"> National-Startups</a>
                    </li>

                    <li class="nav-item" style="margin-left: 2em;">
                        <a class="nav-link" href="internationalStartup.php"> International-Startups</a>
                    </li>

                    <li class="nav-item" style="margin-left: 2em;">
                        <a class="nav-link" href="pune.php"> Local News</a>
                    </li>

                    <li class="nav-item" style="margin-left: 2em;">
                        <a class="nav-link" href="indian.php"> National News</a>
                    </li>

                    <li class="nav-item" style="margin-left: 2em;">
                        <a class="nav-link" href="international.php"> International News</a>
                    </li>

                    <li class="nav-item" style="margin-left: 2em;">
                        <a class="nav-link" href="logout.php"> Logout </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="container" style="background-color: rgb(187, 184, 184);">
<h2>Write your blog...</h2>
    <form style="align-items: center; margin:5em;">

        <div class="mb-3 col-sm-6">
            <label for="exampleInputEmail1" class="form-label">UserName: </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="display: block;">Content: </label>
            <textarea name="text" class="feedback-input" placeholder="Write your content..." id="message" style="height: 450px; width:560px;"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>-->
<div class="container" style="background-color: rgb(187, 184, 184);">
    <form action="addblogs.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username: </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Content</label>
            <input type="textarea" class="form-control" id="exampleInputPassword1" style="height: 200px;">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>