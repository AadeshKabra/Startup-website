<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['text'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contactform";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO `contactform` (`Sr. no`, `Name`, `E-mail`, `Message`) VALUES (NULL, '$name', '$email', '$message')";

            $result = mysqli_query($conn, $sql);

            if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your entry has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true"></span>
                </button>
              </div>';
            }
            else{
                // echo "The record was not inserted succesfully.";
                echo mysqli_error($conn);
                mysqli_error($conn);
            }
        }

     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css\all.min.css" </head>
    <title>Document</title>
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
<div class="container" style="background-color: rgb(187, 184, 184);
padding: 2em; margin: auto, auto;">
<div class="contact-container" >
        <form class="contact-form" id="contact-form" name="myform" action="contactForm.php" method="post">
            <h3>Contact Us</h3>
            <input name="name" type="text" class="feedback-input" placeholder="Name" id="name" />
            <input name="email" type="text" class="feedback-input" placeholder="Email" id="email" />
            <textarea name="text" class="feedback-input" placeholder="Comment" id="message"></textarea>
            <button type="submit" id="submit-button"> Submit </button>
        </form>
    </div>
    </div>

    <section class="footer">
        <h6>Our Social-Media links</h6>
        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>