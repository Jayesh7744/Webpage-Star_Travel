<?php

require 'shared/header.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];


    // connecting to database

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "travels";

    // connection to server

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("sorry we failed to connect: " . mysqli_connect_error());
    }

    // sql quary to be exicuted
    $sql = "INSERT INTO `travels` (`id`, `name`, `contact`, `address`, `time`) VALUES (NULL, '$name', '$contact', '$address', current_timestamp())";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Thank you, Your email and password has been submitted successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
    } else {
        echo "sorry.we have some problem";
    }
}
?>


<div class="container-fluid mt-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="nature.jpg" class="d-block  w-100" alt="old car">

            </div>
            <div class="carousel-item">
                <img src="maldives2.jpg" class="d-block w-100" alt="old car">
            </div>
            <div class="carousel-item">
                <img src="map.jpg" class="d-block w-100" alt="old car">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"></button>
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="d-grid gap-2">

    <button class=" btn btn-outline-dark" type="button">
        <a href="#contact" class="text-secondary">
            Contact Us
        </a>
    </button>
</div>

<div class="card-group container my-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-2 mx-3 my-3">
                <img src="https://picsum.photos/id/158/600/400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Europe</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet. am corporis tempora animi sapiente blanditiis repellendus.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button type="button" class="btn btn-primary mt-3">
                        Book Now
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-2 mx-3 my-3">
                <img src="https://picsum.photos/id/111/600/400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Seniors Speical</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt est doloremque.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button type="button" class="btn btn-primary mt-3">
                        Book Now
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-2 mx-3 my-3">
                <img src="https://picsum.photos/id/174/600/400" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Short Trips</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button type="button" class="btn btn-primary mt-3">
                        Book Now
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-7">
                <img src="https://picsum.photos/id/450/600/400" alt="random picsum img" class="imf-fluid">


            </div>
            <div class="col-md-5">
                <h1 class="mt-5">Switzerland</h1>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laudantium autem
                    sapiente numquam iste atque architecto nemo, corporis, sunt labore nobis. Deleniti earum vel
                    obcaecati placeat, cum inventore tempore nesciunt?</p>
                <button type="button" class="btn btn-primary mt-3">
                    Details
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <h1 class="mt-5">France</h1>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laudantium autem
                    sapiente numquam iste atque architecto nemo, corporis, sunt labore nobis. Deleniti earum vel
                    obcaecati placeat, cum inventore tempore nesciunt?</p>
                <button type="button" class="btn btn-primary mt-3">
                    Details
                </button>
            </div>
            <div class="col-md-5 my-3">
                <img src="https://picsum.photos/id/744/600/400" alt="random picsum img" class="imf-fluid">



            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <img src="https://picsum.photos/id/456/600/400" alt="random picsum img" class="imf-fluid">


            </div>
            <div class="col-md-5 my-3">
                <h1 class="mt-5">Germany</h1>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laudantium autem
                    sapiente numquam iste atque architecto nemo, corporis, sunt labore nobis. Deleniti earum vel
                    obcaecati placeat, cum inventore tempore nesciunt?</p>
                <button type="button" class="btn btn-primary mt-3">
                    Details
                </button>
            </div>
        </div>
    </div>
    <div class="my-5 container-fluid">


        <div id="contact">
            <div class="text-center mt-5 fw-bold">
                <a href="#contact"></a>
                <h1>Contact Us</h1>
            </div>
            <div class="d-flex">
                <div class="p-5 mx-auto w-50">
                    <form class="row g-3" action="./index.php" method="post">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="contact" class="form-label">Contact No</label>
                            <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                        </div>

                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                    </form>
                </div>
            </div>

            </main>

            <?php
                require 'shared/footer.php';
            ?>