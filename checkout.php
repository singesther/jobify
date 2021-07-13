<?php
include_once('./server/config/conn.php');
include_once('./server/server.find_job.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="./vendor/bootstrap/dist/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="./vendor/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="./dist/css/job_seeker.min.css" />
    <title>JobSeeker</title>
</head>
<style>
     .button {
        display: inline-block;
        padding: 10px 20px;
        text-align: right;
        text-decoration: none;
        color: #ffffff;
        background-color: #7aa8b7;
        border-radius: 6px;
        outline: none;
     }
</style>

<body id="home">
    <div id="wrapper">

        <!-- Navbar -->
        <nav id="main-nav" class="navbar navbar-expand-lg sticky-top mb-3">
            <div class="container">
                <a class="navbar-brand" href="index.html">Sky<span class="text-primary">Jobify</span></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#my-nav" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bx bx-menu-alt-right"></i>
                </button>
                <div class="collapse navbar-collapse" id="my-nav">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">How it works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="checkout.php">Apply as Jobseeker</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="postjob.php">Register Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./affiliate/login.php">affiliate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <!-- Company details -->
            <div class="row mb-3">
                <div class="col-xs-12 col-md-12 col-lg-3 col-xl-3">
                    <p class="bold">Find Job</p>
                    <p class="title bold small">Tell us more about you,</p>
                    <p class="text-dark small">Your Full Name, where you're looking for a job, Postion and CV.</p>
                    
                    <a class="button" href="https://dashboard.flutterwave.com/donate/pnporjpjhiqt">Checkout your payment</a>

                </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="./vendor/jquery/dist/jquery.min.js"></script>
    <script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="./vendor/popper.js/dist/umd/popper.min.js"></script>
    <!-- Custom js -->
    <script src="./dist/js/jobseeker.js"></script>
</body>
<footer class="bg-light text-center text-lg-start" style="position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        &copy; Skyjobify 2021
      
    </div>
    <!-- Copyright -->
  </footer>

</html>