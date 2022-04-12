<?php
error_reporting(0);
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "local";


 $conn = mysqli_connect($servername, $username, $password, $database);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $founders = $_POST['founders'];
    $companyName = $_POST['companyName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $information = $_POST['information'];
    $type = $_POST['type'];




        $sql = "INSERT INTO `local` (`Founders`, `Company Name`, `Address`, `Email`, `Phone`, `Information`, `Type`) VALUES ('$founders', '$companyName', '$address', '$email', '$phone', '$information', '$type')";

        $result = mysqli_query($conn, $sql);

}

echo ` <div class="local" id="local" style="margin: 4em;"> <br> 
<h1>These are local startups</h1> </div>`;
// include 'registeration.php';
$sql2 = "SELECT * FROM `local`";
$result = mysqli_query($conn, $sql2);

$num = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){



    echo "<div class='col-4'>
    <div class='card m-5 p-1'>
    <a>
    <div class='card-body'>
    <h5 class='card-title'>".$row['Company Name']."</h5>
    <p class='card-text'>"."<b>Founded by: </b>".$row['Founders']."</p>
    <p class='card-text'>"."<b>Type of startup: </b>".$row['Type']."</p>
    <p class='card-text'>".$row['Information']."</p>
    <p class='card-text'>"."<b>Address: </b>".$row['Address']."</p> 
    <p class='card-text'>"."<b>Contact no: </b>".$row['Phone']."</p> 
    <p class='card-text'>"."<b>Email: </b>".$row['Email']."</p>
   
    </div>
    </a>
    </div>
    </div>";


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Engine</title>
    <link rel="stylesheet" href="startups.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color: rgb(169,169 ,169 );" class="row">



    <form class="registerationForm" style="margin: 4em; font-size: 20px; " action="localStartup.php" method="post">
        <h1 style="margin: 2em;">Register your startup with us!</h1>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="founders">Founders</label>
                    <input type="text" id="founders" class="form-control" name="founders" />

                </div>
            </div>

        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="companyName">Company name</label>
            <input type="text" id="companyName" class="form-control" name="companyName" />

        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="address">Address</label>
            <input type="text" id="address" class="form-control" name="address" />

        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="email" />

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="number" id="phone" class="form-control" name="phone" />

                </div>
            </div>
        </div>


        <!-- Message input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="information">Additional information</label>
            <textarea class="form-control" id="information" rows="4" name="information"></textarea>

        </div>

        <div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="type">Type of your startup (Food, Finance, etc. )</label>
                        <input type="text" id="type" class="form-control" name="type" />

                    </div>
                </div>

            </div>
        </div>

 




        <!-- Submit button -->
        <button type="submit" class="btn btn-outline-dark mb-4">Register</button>
    </form>

    <!-- <section class="footer">
        <h6>Our Social-Media links</h6>
        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
    </section> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    
</body>

</html>