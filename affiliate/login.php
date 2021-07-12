
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="../dist/css/job_seeker.min.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: ../dashboard/afilliate.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<nav id="main-nav" class="navbar navbar-expand-lg sticky-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">Sky<span class="text-primary">Jobify</span></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#my-nav" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bx bx-menu-alt-right"></i>
                </button>
                <div class="collapse navbar-collapse" id="my-nav">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="../index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#how-it-work">How it works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../findjob.php">Find Job</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../postjob.php">Post Job</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php">Afilliate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav></br><br>
        <div class="form">
         <h1>Log In</h1>
            <form action="" method="post" name="login">
              <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required /> </br></br>
                  <input name="submit" type="submit" value="Login" />
            </form>
            <p>Not registered yet? <a href='registration.php'>Register Here</a></p>

            <br /><br />
            </div>
                <?php } ?>


                </body> <br /><br /><br /><br />

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
