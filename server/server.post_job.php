<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company_name = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST['company_name']));
    $company_category = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST['company_category']));
    $job_title = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST['job_title']));
    $phone_number = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST['phone_number']));
    $email_address = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST['email_address']));
    $province = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST['province']));
    $district = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST['district']));
    $sector = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST['sector']));
    $username = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db_conn, htmlspecialchars($_POST['password']));
    // Add uploads script

    #--- preparing the query
    $sql = "INSERT INTO companies(company_name, company_category, job_title, phone_numb, email_address, province, distric, sector, username, password) VALUES(?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($db_conn); //prepare statement
    if (!mysqli_stmt_prepare($stmt, $sql)) { // check if is prepared
        echo ("Something missing");
    } else {
        mysqli_stmt_bind_param($stmt, 'ssssssssss', $company_name, $company_category, $job_title, $phone_number, $email_address, $province, $district, $sector, $username, md5($password));
        mysqli_stmt_execute($stmt);
        echo ("<script>
                window.alert('Your company is now registered, Please login!');
                window.location.href='./login.php';
                </script>");
        exit;
    }
}
