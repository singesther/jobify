<?php
    
    #--Now destroy all sessions when the logout event is trigled
    if(isset($_GET['logout']))
    {
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        session_destroy();
        header("Location: ../login.php");
         exit();
    }

?>