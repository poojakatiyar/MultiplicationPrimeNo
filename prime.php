

    <?php

    /*
    * To change this template, choose Tools | Templates
    * and open the template in the editor.
    */

    $n= 10; 
   // $matrix=  array();
    for($i=1;$i<=$n;$i++){  //numbers to be checked as prime

    $counter = 0; 
    for($j=1;$j<=$i;$j++){ //all divisible factors


    if($i % $j==0){ 

    $counter++;
    }
    }

    //prime requires 2 rules ( divisible by 1 and divisible by itself)
    if($counter==2){
   $primeno[] =   $i;

    



    }
    }
    ?>

<?php 
    foreach ($primeno as $key => $value) {
 echo $value;   
}

//for ($r = 1; $r <= $i; $r++)
//
//    {
//
//    for ($c = 1; $c <= $i;$c++)
//
//    {
//
//    echo $arr[$r][$c]=$r*$c;
//    echo " "; 
//    }
//    echo "</br>";
//   
//    }
?>



hy this is pooja



data here changesss










