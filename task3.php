<?php

$grades=[85, 92, 78, 88, 95];

function arraySorting($grades){
    rsort($grades);
    return $grades;
}
$arraySorted=arraySorting($grades);
print_r($arraySorted);

