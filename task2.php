<?php


$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEvenNumbers($inputArray){
   $arrayFiltered= array_filter($inputArray, function($value){
       return $value % 2 != 0;
   });

   print_r($arrayFiltered);
}

removeEvenNumbers($numbers);
