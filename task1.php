<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modifiedText($inputText){
    $lowercaseText= strtolower($inputText);
    $modifiedText=str_replace("brown", "red", $lowercaseText);
    echo $modifiedText;
}
modifiedText($text);
