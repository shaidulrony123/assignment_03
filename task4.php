<?php

$studentGrades=[
    ["Math"=>"88","English"=>"93","Science"=>"79"],
    ["Math"=>"77","English"=>"88","Science"=>"91"],
    ["Math"=>"91","English"=>"78","Science"=>"84"]
];
function averageGrades($grades){
    foreach($grades as $students=>$grades){
        $totalNumber = array_sum($grades);
        $averageNumber = $totalNumber / count($grades);
       
        printf("Student " . ($students + 1) . " - Average Grade: %.2f\n", $averageNumber);
        echo "<br>";
    }
}

averageGrades($studentGrades);
