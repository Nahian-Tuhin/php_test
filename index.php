<?php $title="Register";
session_start(); ?>
 <!DOCTYPE html>
 <html lang="en">


 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Register_page</title>
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

 <body >
   <div class="container-scroller">
     <div class="container-fluid page-body-wrapper">
       <div class="row">
         <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
           <div class="row w-100">
             <div class="col-lg-8 mx-auto">
               <div class="row">
                 <div class="col-lg-6 bg-white">
                   <div class="auth-form-light text-left p-5">
                     <h2>Register</h2>
                     <h4 class="font-weight-light">Hello! let's get started</h4>
                        
                        <?php
                        if(isset(  $_SESSION['error'] )){
                        ?>

                        <div class="alert alert-danger">
                        Some thing went Wrong!!!
                        </div>

                        <?php }
                        ?>
                     <form class="pt-4" method="post" action="Reg_view.php">
                         <div class="form-group">
                           <label for="exampleInputEmail1">Name</label>
                           <input type="text" class="form-control"  placeholder="Name" name="user_name">
                           <i class="mdi mdi-account"></i>

    

                           <?php

if(isset(  $_SESSION['name'] )){
?>

<div class="alert alert-danger">
<?=$_SESSION['name']  ?>
</div>

<?php
}
?>

                         </div>
                         <div class="form-group">
                           <label for="exampleInputEmail1">Email</label>
                           <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Email"name="user_email">
                           <i class="mdi mdi-email"></i>


                 

                           <?php

if(isset(  $_SESSION['Email_error'] )){
?>

<div class="alert alert-danger">
<?=$_SESSION['Email_error']  ?>
</div>

<?php
}
?>




                         </div>












                         <div class="form-group">
                           <label for="exampleInputEmail1">Age</label>
                           <input type="number" min="0" class="form-control"  placeholder="age" name="age">
                           <!-- <i class="mdi mdi-account"></i> -->

    

                           <?php

if(isset(  $_SESSION['age'] )){
?>

<div class="alert alert-danger">
<?=$_SESSION['age']  ?>
</div>

<?php
}
?>

                         </div>

                         <div class="form-group">
                           <label for="exampleInputEmail1">Years Of Experience</label>
                           <input type="number"  min="0" class="form-control"  placeholder="Experience" name="Experience">
                           <!-- <i class="mdi mdi-account"></i> -->

                           <?php

if(isset(  $_SESSION['Experience'] )){
?>

<div class="alert alert-danger">
<?=$_SESSION['Experience']  ?>
</div>

<?php
}
?>

                         </div>
                         <div class="form-group">
                           <label for="exampleInputEmail1">Type</label>
                           <input type="text" class="form-control"  placeholder="Type" name="Type">
                           <!-- <i class="mdi mdi-account"></i> -->

                           <?php

if(isset(  $_SESSION['Type'] )){
?>

<div class="alert alert-danger">
<?=$_SESSION['Type']  ?>
</div>

<?php
}
?>

                         </div>




                         <!-- <div class="form-group">
                           <label for="exampleInputPassword1">Password</label>
                           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"name="user_password">
                           <i class="mdi mdi-eye"></i>
                         </div>
                         <div class="form-group">
                           <label for="exampleInputPassword2">Password</label>
                           <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm password"name="user_password1">
                           <i class="mdi mdi-eye"></i>
                         </div>
                          -->
                         <div class="mt-5">
                           <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium" >Register</button>
                         </div>

                         <div class="mt-2 w-75 mx-auto">
                           <div class="form-check form-check-flat">
                             <label class="form-check-label">
                               <input type="checkbox" class="form-check-input">
                               I accept terms and conditions
                             </label>
                           </div>
                         </div>

                         <?php
      session_destroy();
      ?>
                         <div class="mt-2 text-center">
                           <a href="login.php" class="auth-link text-black">Already have an account? <span class="font-weight-medium">Sign in</span></a>
                         </div>
      

                     </form>
                   </div>
                 </div>
                 <!-- <div class="col-lg-6 register-half-bg d-flex flex-row"> -->
                   <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy;<?=Date("Y");?> All rights reserved.</p>
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


 </html>
