<?php
$title="Register";
session_start();
// require 'includs/db.php';
include 'includs/db.php';
$user_name=str_replace(" ","",$_POST['user_name']);
$user_email=$_POST['user_email'];
$age=$_POST['age'];
$Experience=$_POST['Experience'];
$Type=$_POST['Type'];

$current_data= file_get_contents('data.json');
$array_data= json_decode($current_data,true);
if (isset($array_data)) {
    # code...
    foreach ($array_data as $data ){
            
        // print_r($data['Name']);
        if($data['Email'] == $user_email){
        $email_exist=true;
        break;
        }
        
        }
}


// $user_password=md5($_POST['user_password']);
// $user_password1=md5($_POST['user_password1']);


if (empty($user_name) ) {
    $_SESSION['name']='Enter User Name';
    header('location: index.php');

}
elseif (strlen($user_name) < 5) {
    $_SESSION['name']='User Name Atleast 5 Char';
    header('location: index.php');

}

elseif (empty($user_email) ) {
    $_SESSION['Email_error']='Email is Empty';
    header('location: index.php');
}
    elseif (isset($email_exist)) 

    {
        $_SESSION['Email_error']='Email is Used';
        header('location: index.php');
    }

elseif (! filter_var($user_email, FILTER_VALIDATE_EMAIL) ) {
    $_SESSION['Email_error']='Email is not Valid';
    header('location: index.php');
}


// elseif (empty($user_password) ) {
// echo "Enter User Password";
// }
// elseif (strlen($user_password) < 5)  {
// echo "Password Atleast 5 Char";
// }
// elseif (empty($user_password1) ) {
// echo "Enter Confirm Password";
// }
// elseif (!($user_password == $user_password1)) {
// echo  "Password doesnot Match";
// }

elseif (empty($age) ) {
    $_SESSION['age']='Age Field is Empty';
    header('location: index.php');
}
elseif (empty($Experience) ) {
    $_SESSION['Experience']='Experience Field is Empty';
    header('location: index.php');
}
elseif (empty($Type) ) {
    $_SESSION['Type']='Type Field is Empty';
    header('location: index.php');
}



else {

    // $check_Q = "SELECT * FROM users Where user_email = '$user_email'" ;
    // $data=mysqli_query($db_connect,$check_Q);
    // if ($data ->num_rows == 1) {
    // echo "This Email Is Used";
    // header('location: register.php');
    //         }
    //         else {
    //         $insert_query ="INSERT INTO users (user_name,user_email,user_password,user_password1) VALUES ('$user_name','$user_email',
    //         '$user_password','$user_password1')";
    //         mysqli_query($db_connect,$insert_query);
    //         header('location: login.php');

    //               }




        // for csv


        $file= fopen("data.csv","a");
        $rows= count(file('data.csv'));
         
        if($rows > 1){
            $rows =($rows - 1) + 1;
            }
            $data= [
                "Serial" => $rows,
                "Name" => $user_name,
                "Email" => $user_email,
                "Age" => $age,
                "Experience" => $Experience,
                "Type" => $Type
            ];

            fputcsv($file, $data);


            // for Json
    $array_data[]= $data;
    $json_data=json_encode($array_data);
    file_put_contents('data.json',$json_data);


            //for txt
    file_put_contents('data.txt', $json_data);
    
    header('location: dashboard.php');
}



 ?>
