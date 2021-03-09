<?php



function search(){
    // echo "done";
    // print_r($_POST);
    $search_data= $_POST['search'];


    $current_data= file_get_contents('data.json');
    $array_data= json_decode($current_data,true);
    if (isset($array_data)) {
        # code...
        foreach ($array_data as $value){
                
            
            
            if($value['Name'] == $search_data){
                
                // print_r($value['Name']);
                echo '<br>';
                echo 'Serial: ';
                echo $value['Serial'];
                echo '<br>';
                echo 'Name: ';
                echo $value['Name'];
                echo '<br>';
                echo 'Email: ';
            echo $value['Email'];
            echo '<br>';
            echo 'Age: ';
            echo $value['Age'];
            echo '<br>';
            echo 'Experience: ';
            echo $value['Experience'];
            echo '<br>';
            echo 'Type: ';
            echo $value['Type'];
            echo '<br>';

                }
            
            }
    }


}
    



function bubble_sort_by_age()
{
   
    $current_data= file_get_contents('data.json');
    $array_data= json_decode($current_data,true);

    foreach ($array_data as $value){

        $arr[]=$value['Age'];

    }
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }


            foreach ($arr as $valuea) {
            foreach ($array_data as $value){

               if ( $value['Age'] == $valuea)  {
                 
                            //  print_r($value) ;




                             echo '<br>';
                             echo 'Serial: ';
                             echo $value['Serial'];
                             echo '<br>';
                             echo 'Name: ';
                             echo $value['Name'];
                             echo '<br>';
                             echo 'Email: ';
                         echo $value['Email'];
                         echo '<br>';
                         echo 'Age: ';
                         echo $value['Age'];
                         echo '<br>';
                         echo 'Experience: ';
                         echo $value['Experience'];
                         echo '<br>';
                         echo 'Type: ';
                         echo $value['Type'];
                         echo '<br>';
               };
        
            }

            }

}

    

function  bubble_sort_by_exp(){
 
    $current_data= file_get_contents('data.json');
    $array_data= json_decode($current_data,true);

    foreach ($array_data as $value){

        $arr[]=$value['Experience'];

    }
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }


            foreach ($arr as $valuea) {
            foreach ($array_data as $value){

               if ( $value['Experience'] == $valuea)  {
                 
                            //  print_r($value) ;




                            echo '<br>';
                            echo 'Serial: ';
                            echo $value['Serial'];
                            echo '<br>';
                            echo 'Name: ';
                            echo $value['Name'];
                            echo '<br>';
                            echo 'Email: ';
                            echo $value['Email'];
                            echo '<br>';
                            echo 'Age: ';
                            echo $value['Age'];
                            echo '<br>';
                            echo 'Experience: ';
                            echo $value['Experience'];
                            echo '<br>';
                            echo 'Type: ';
                            echo $value['Type'];
                            echo '<br>';
                };
        
            }

            }


}

if (isset($_POST['search_button'])) {
    search();

} elseif (isset($_GET['button'])) {
    if ($_GET['button'] == "age") {
        bubble_sort_by_age();
        # code...
    }else {

        bubble_sort_by_exp();

    }
    
}

else {
 
header("HTTP/1.0 404 Not Found");

}

    ?>