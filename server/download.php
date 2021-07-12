<?php
include_once('./config/conn.php');
$cv_id = $_POST['cv_id'] ?? null;
if (!$cv_id) {
    header('Location: ../dashboard/');
    // exit; 
} else {
    #Advanced way of downloading using readfile() func_get_arg....
}

