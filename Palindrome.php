<?php


// Question 1

function isPalindrome($word){
    $string = strtolower($word);
    $rev = strrev($word);
    if($string == $rev) return true;
}
echo isPalindrome("deleveled");

