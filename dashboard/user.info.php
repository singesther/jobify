<?php
session_start();
include_once('../server/config/conn.php');
if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    header("Location:../admin/");
    exit();
}
include('../admin/settings/personal_data.php');
include_once('../server/logout.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-citizen | Dashboard</title>

    <!-- Custom Icons-->
    <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles-->
    <link href="../dist/css/dashboard.min.css" rel="stylesheet">
    <!-- Data tables -->
    <link rel="stylesheet" href="../vendor/datatables/dataTables.bootstrap4.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../admin/dashboard.php">
                <div class="sidebar-brand-icon">
                    <i class="bx bx-group"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E<sup>citizen</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../admin/dashboard.php">
                    <i class="bx bx-cookie"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Action center
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#about-citizen" aria-expanded="true" aria-controls="about-citizen">
                    <i class="bx bx-group"></i>
                    <span>About citizens</span>
                </a>
                <div id="about-citizen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../admin/citizen.info.php"><i class="bx bx-group"></i> Registered</a>
                        <a class="collapse-item" href="../admin/problems.php"><i class='bx bxs-file-plus'></i> Problems</a>
                        <a class="collapse-item" href="../admin/suggestions.php"><i class='bx bx-list-plus'></i> Suggestions</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="bx bx-cog"></i>
                    <span>Settings</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" data-toggle="modal" data-target="#addmin" href="#"><i class="bx bx-user-plus"></i> Add account</a>
                        <a class="collapse-item" href="../admin/accounts.php"><i class='bx bxs-wrench'></i> Manage accounts</a>
                        <!-- <a class="collapse-item" href="../admin/manage_info.php"><i class='bx bxs-data'></i> Manage data</a> -->
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Accounts
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bx bx-group"></i>
                    <span>User accounts</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../admin/user.info.php"><i class="bx bx-user"></i> Users</a>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#adduser"><i class="bx bx-user-plus"></i> Add user account</a>
                        <!-- <a class="collapse-item" href="accounts.php"><i class='bx bx-user-x'></i> Remove account</a> -->
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <a href="#" id="sidebarToggle"><i class="bx bx-chevron-left"></i></a>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="bx bx-menu-alt-right"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <?php include('../admin/partials/top_nav_link.php'); ?>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User's information</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Names</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Position</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = 'SELECT * FROM users;';
                                        $stmt = mysqli_stmt_init($db_conn);
                                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                                            printf('Ooops!');
                                        } else {
                                            mysqli_stmt_execute($stmt);
                                            $results = mysqli_stmt_get_result($stmt);
                                            if ($results->num_rows > 0) {
                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($results)) {
                                        ?>
                                                    <tr>
                                                        <td><?php echo $i ?></td>
                                                        <td class="text-capitalize"><?php echo $row['full_name'] ?></td>
                                                        <td><?php echo ($row['phone']); ?></td>
                                                        <td><?php echo ($row['email']); ?></td>
                                                        <td class="text-capitalize"><?php echo $row['status'] ?></td>
                                                        <td>
                                                            <!-- <a href="../admin/user.update.php?update_user-id=<?php echo $row['Id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a> -->
                                                            <form method="post" action="../server/delete.php" style="display: inline-block">
                                                                <input type="hidden" name="user_id" value="<?php echo $row['Id'] ?>" />
                                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to remove this account? ')">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                        <?php
                                                    $i++;
                                                }
                                            }
                                        }
                                        ?>
                                    </tbody>
                                    <!-- <tfoot>
                                        <th>#</th>
                                        <th>Names</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Position</th>
                                        <th>Action</th>
                                    </tfoot> -->
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Add content -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>

            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-dark">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; E-citizen 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="bx bx-chevron-up"></i>
    </a>
    <?php include("../admin/partials/models.php") ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/dist/jquery.min.js" difer></script>
    <script src="../vendor/bootstrap/dist/js/bootstrap.min.js" difer></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js" difer></script>
    <!-- Custom scripts for all pages-->
    <script src="../dist/js/dashboard.min.js" difer></script>
    <script src="../dist/js/requests.js" difer></script>
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js" difer></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js" difer></script>

    <!-- Page level custom scripts -->
    <script src="../dist/js/datatables-demo.js" difer></script>
    <script src="../admin/load_contacts.js"></script>


</body>

</html>