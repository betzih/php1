<?php
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Argentina/Buenos_Aires');

$hr = date("h");
$min = date("i");

echo "La hora es $hr:$min<br>";

for($i=0; $i<60; $i++){
     $min++;

     if ($min == 60){
         $min = 0;
         $hr++;       
    }  
      
    if ($hr == 24){
        $hr = 0;
    }

    
    echo "La hora es $hr:$min<br>";

   
}

?> 