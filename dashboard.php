<?php $title="Dashboard";
?>
 <!DOCTYPE html>
 <html lang="en">


 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="includs/dash/vendors/mdi/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="includs/dash/vendors/simple-line-icons/css/simple-line-icons.css">
   <link rel="stylesheet" href="includs/dash/vendors/flag-icon-css/css/flag-icon.min.css">
   <link rel="stylesheet" href="includs/dash/vendors/css/vendor.bundle.base.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
   <!-- endinject -->
   <!-- plugin css for this page -->
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <link rel="stylesheet" href="includs/dash/css/style.css">
   <!-- endinject -->
   <link rel="shortcut icon" href="includs/dash/images/favicon.png" />
   <style>
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
 </head>

 <body >
   <div class="container-scroller">
     <div class="container-fluid page-body-wrapper">
       <div class="row">
         <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
           <div class="row w-100">
             <div class="col-lg-8 mx-auto">
 <h1 >All Data Files : <?=count(file('data.csv')) ?> </h1>
               <div class="row">
                 <div class="col-lg-8 bg-white">
                <form action="search_sort.php" method="post">
    <input type="text" name="search" id="search" placeholder="Search Details" required class="form-control" />
    <!-- <button name="search_button" id="button" type="submit"></button> -->
    <input type="submit" name="search_button" class="button" value="Search" />
    </form>
   <ul class="list-group" id="result"></ul>
   <a href="search_sort.php?button=age"> 
   <button>Sort By Age
   </button>
   <!-- <button name="filter" class="button" value="" /> -->
   </a>
   <a href="search_sort.php?button=exp"> 
   <button>Sort By Experience
   </button>
   <!-- <button name="filter" class="button" value="" /> -->
   </a>
    
   <br />
  </div>
  <br>
<table class="table">
    <thead>
        <tr>
            <th>Serial No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Experience</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
    
    <?php
        $current_data= file_get_contents('data.json');
        $array_data= json_decode($current_data,true);
        if (isset($array_data)) {
        # code...
        foreach ($array_data as $data ){
            

        echo " <tr> 
        <td>" .$data['Serial'].'</td>'.'<td>' .$data['Name']. "</td>"
        .'<td>' .$data['Email']. "</td>"
        .'<td>' .$data['Age']. "</td>"
        .'<td>' .$data['Experience']. "</td>"
        .'<td>' .$data['Type']. "</td>".
        "</tr>";
        
        }
        }

        ?>



    
    </tbody>
</table>

          
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




 <script>
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('data.json', function(data) {
   $.each(data, function(key, value){
    if (value.Name.search(expression) != -1 || value.location.search(expression) != -1)
    {
    //  $('#result').append('<li class="list-group-item link-class"><img src="'+value.image+'" height="40" width="40" class="img-thumbnail" /> '+value.Name+' | <span class="text-muted">'+value.location+'</span></li>');
     $('#result').append('<li class="list-group-item link-class">'+value.Name+' | <span class="text-muted">'+value.Email+'</span></li>');
    }
   });   
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[0]));
  $("#result").html('');
 });
});


$('.button').click(function() {
  $.ajax({
    type: "POST",
    url: "some.php",
    data: { name: "John" }
  }).done(function( msg ) {
    alert( "Data Saved: " + msg );
  });
});
</script>
