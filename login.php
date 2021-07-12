<?php
session_start();
include_once('./server/config/conn.php');
include_once('./server/server.login.php');
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
    <title>Skyjobify</title>
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
                            <a class="nav-link" href="findjob.php">Find Job</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="postjob.php">Post Job</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./affiliate/login.php">affiliate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="form__container p-lg-5">

            <form class="form bg-white" action="<?php echo (htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="POST">
                <div class="text-center">
                    <?php
                    if (isset($_GET['incorrect_inputs'])) {
                        echo ('<h1 class="h4 mb-4 text-danger small bold">Access Denied!</h1>');
                    }
                    ?>
                </div>
                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="username" required autofocus>
                    <label for="" class="form__label">Username</label>
                </div>

                <div class="form__div">
                    <input type="password" class="form__input" placeholder=" " name="password" required>
                    <label for="" class="form__label">Password</label>
                </div>

                <div class="row">
                    <div class="col-md-6  text-right order-md-2 order-lg-2">
                        <div class="form__div">
                            <button type="submit" name="login" id="" class="btn btn-primary btn-md btn-block">Login</button>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-1 order-lg-1">
                        <a href="#" class="a__link small">Forgot password?</a>
                    </div>
                </div>
            </form>
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