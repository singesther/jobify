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
                            <a class="nav-link active" href="findjob.php">Find Job</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="postjob.php">Post Job</a>
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
                    <a href="https://dashboard.flutterwave.com/donate/pnporjpjhiqt">Checkout your payment</a>

                </div>
                <div class="col-xs-12 col-md-12 col-lg-9 col-xl-9">
                    <div class="card shadow-none " id="form">
                        <div class="card-body p-0">
                            <div class="p-5">
                                <form action="<?php echo (htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form__div">
                                                <input type="text" class="form__input" name="full_name" placeholder=" " pattern="[a-zA-Z\s]+" title="Please enter letters only" autofocus required>
                                                <label for="" class="form__label">Full name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form__div">
                                                <input type="text" class="form__input" name="phone_number" placeholder=" " pattern="[0-9]+" minlength="10" maxlength="10" title="Please enter number only" required>
                                                <label for="" class="form__label">Phone number</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form__div">
                                                <input type="text" class="form__input" name="job_area" placeholder=" " pattern="[a-zA-Z\s]+" title="Please enter letters only" required>
                                                <label for="" class="form__label">Type of job</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form__div">
                                                <input type="text" class="form__input" name="job_title" placeholder=" " pattern="[a-zA-Z\s]+" title="Please enter letters only" required>
                                                <label for="" class="form__label">Title or Job postion</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Field for username and password -->
                                    <!-- <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form__div">
                                                <input type="text" class="form__input" name="username" id="user__name" placeholder=" " required>
                                                <label for="" class="form__label">Username</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form__div">
                                                <input type="password" class="form__input" name="password" id="password" placeholder=" " required>
                                                <label for="" class="form__label">Password</label>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label text-primary small" for="customFile">Add you CV: <span class="text-danger">File must be <i class='bx bxs-file-doc'></i>DOC file or <i class='bx bxs-file-pdf'></i>PDF file and not bigger than 5MBs</span></label><br>
                                                <input type="file" name="cv_file" class="form-control-sm" id="customFile" />
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-md-8 d-none d-lg-block"></div> -->
                                        <div class="col-md-4  text-right order-md-2 order-lg-2">
                                            <div class="form__div">
                                                <button type="submit" name="submit" id="" class="btn btn-primary btn-md">Submit</button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-8 order-md-1 order-lg-1">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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