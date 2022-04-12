<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local News</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css\all.min.css"> </head>

</head>

<body style="background-color: rgb(187, 184, 184);">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="indian.php">Startup Engine</a>
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
                        <a class="nav-link" href="indian.php"> National News</a>
                    </li>

                    <li class="nav-item" style="margin-left: 2em;">
                        <a class="nav-link" href="international.php"> International News</a>
                    </li>

                    <li class="nav-item" style="margin-left: 2em;">
                        <a class="nav-link" href="contactForm.php">Contact Us</a>
                    </li>

                    <li class="nav-item" style="margin-left: 2em;">
                        <a class="nav-link" href="logout.php"> Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- <h1>Looking for Startup News? </h1>
    <button type="button" class="btn btn-outline-primary btn-lg button-type" href="#local" id="local-btn">Local</button>
    <button type="button" class="btn btn-outline-primary btn-lg button-type" href="#national">National</button>
    <button type="button" class="btn btn-outline-primary btn-lg button-type" href="#international">International</button> -->


    <div class="news-section row" id="news-section">
        <div class="row">
            <div class="col-lg-4">
                <div class="card m-5 p-1">
                    <a href="#">
                        <img src="break_1200x768.webp" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">News Headline</h5>
                            <p class="card-text">News Description (in short)</p>
                            <button href="#" class="btn btn-primary news-btn" style="width: 100%;">See More</button>
                            <a class="card-text mx-5">Date</a>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    

    <section class="footer">
        <h6>Our Social-Media links</h6>
        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="pune.js"></script>
</body>

</html>