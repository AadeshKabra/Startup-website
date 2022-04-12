<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $founders = $_POST['founders'];
    $companyName = $_POST['companyName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $information = $_POST['information'];
    $level = $_POST['level'];
    $type = $_POST['type'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "registeration";


    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        $sql = "INSERT INTO `registeration` (`Founders`, `Company Name`, `Address`, `Email`, `Phone`, `Information`, `Level`, `Type`) VALUES ('$founders', '$companyName', '$address', '$email', '$phone', '$information', '$level', '$type')";

        $result = mysqli_query($conn, $sql);




        if ($result) {
            echo `<div class="row row-cols-1 row-cols-md-3 g-4 {$type}-startups" >

            <div class="col">
                <div class="card h-100" style="margin: 2em;">
                    <div class="card-body">
                        <h5 class="card-title">{$companyName}</h5>
                        <p class="card-text">
                            {$information}
                        </p>
                        <p class="class-text">
                        Founded by: {$founders}
                        </p>
                        <p class="class-text">
                        Type of Startup: {$type}
                        </p>

                    </div>
                </div>
            </div>
        </div>`;
        } else {
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
    <title>Document</title>
    <link rel="stylesheet" href="startups.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
    <div class="sections" id="sections">
        <h1> Looking for startups?</h1>
        <button type="button" class="btn btn-outline-primary btn-lg button-type" href="#local" id="local-btn">Local</button>
        <button type="button" class="btn btn-outline-primary btn-lg button-type" href="#national">National</button>
        <button type="button" class="btn btn-outline-primary btn-lg button-type" href="#international">International</button>
    </div>

    <div class="local" id="local" style="margin: 4em;">
        <h1>These are local startups</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4 local-startups">

            <div class="col">
                <div class="card h-100" style="margin: 2em;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="national" id="national" style="margin: 4em;">
        <h1>These are National-level startups</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100" style="margin: 2em;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="international" id="international" style="margin: 4em;">
        <h1>These are International-level startups</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100" style="margin: 2em;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <form class="registerationForm" style="margin: 4em; font-size: 20px;" action="registeration.php" method="post">
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



        <div class="row mb-4">

            <!-- Local -->
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="phone">Enter the category of your startup (Local, National or International)</label>
                    <input type="text" id="level" class="form-control" name="level" />

                </div>
            </div>

        </div>

        <div>
            <h4>Type of your startup: </h4>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="phone">Enter the type of your startup (Food, Finance, etc. )</label>
                        <input type="text" id="type" class="form-control" name="type" />

                    </div>
                </div>

            </div>
        </div>




        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
    </form>

    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</body>

</html>