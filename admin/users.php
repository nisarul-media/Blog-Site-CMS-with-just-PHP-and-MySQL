<!-- Header -->
<?php include "includes/admin_header.php"; ?>
<?php $filename =  basename(__FILE__, '.php'); ?>
<?php code_of_categories(); ?>
<!-- Navigation -->
<?php include "includes/admin_navigation.php"; ?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Admin Dashboard,
                    <small>Author</small>
                </h1>
            </div>
        </div>
        <div>
           <?php

           if (isset($_GET['source-user'])) {
               switch ($_GET['source-user']) {
                   case 'view':
                       include "includes/view_all_users.php";
                       break;
                   case 'add_new':
                       include "includes/add_new_users.php";
                       break;
                   case 'edit':
                       include "includes/edit_user.php";
                       break;
                   default:
                       include "includes/view_all_posts.php";
               }
           } else {
               include "includes/view_all_users.php";
           }

           ?>



        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<!-- Footer -->
<?php include "includes/admin_footer.php"; ?>
