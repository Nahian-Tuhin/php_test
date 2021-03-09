<?php
$title="login";
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 09:43:04 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LOGIN</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="includs/dash/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="includs/dash/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="includs/dash/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="includs/dash/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="includs/dash/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="includs/dash/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-8 mx-auto">
              <div class="row">
                <div class="col-lg-6 bg-white">
                  <div class="auth-form-light text-left p-5">
                    <h2>Login</h2>
                    <h4 class="font-weight-light">Hello! let's get started</h4>

                    <form class="pt-5" method="post" action="login_view.php">
<?php
if(isset(  $_SESSION['error'] )){
  ?>

  <div class="alert alert-danger">
  Your Email or Password is Wrong!!!
  </div>


<?php }
?>




                        <div class="form-group">
                          <label for="exampleInputEmail1">Username</label>


                          <input type="text" class="form-control" id="exampleInputEmail1" name="user_email" placeholder="Email">
                          <i class="mdi mdi-account"></i>
                        </div>
<?php

if(isset(  $_SESSION['Email_error'] )){
?>

                        <div class="alert alert-danger">
                        Your Email  is Empty!!!
                        </div>

<?php
}
 ?>


                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1"name="user_password" placeholder="Password">
                          <i class="mdi mdi-key"></i>
                        </div>

<?php
if(isset($_SESSION['Password_error'] )){
?>



<div class="alert alert-danger">
Your Password is Empty!!!
</div>


<?php
}
session_destroy();
 ?>

                        <div class="mt-5">
                          <button class="btn btn-block btn-success btn-lg font-weight-medium"  type="submit">Login</button>
                        </div>


                        <div class="mt-3 text-center">
                          <a href="index.php" class="auth-link text-black">New register</a>
                        </div>

                    </form>
                  </div>
                </div>
                <div class="col-lg-6 login-half-bg d-flex flex-row">
                  <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; <?=Date("Y");?> All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="includs/dash/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="includs/dash/js/off-canvas.js"></script>
  <script src="includs/dash/js/hoverable-collapse.js"></script>
  <script src="includs/dash/js/misc.js"></script>
  <script src="includs/dash/js/settings.js"></script>
  <script src="includs/dash/js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 09:43:04 GMT -->
</html>
