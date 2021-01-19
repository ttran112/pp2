<?php
//Author: Thanh Tran
//Date: jan 15, 2021
//Url:index.php
//Project Title: Pair Program 2

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//functions that use for PairProgram2

//print an array
function printArray($number)
{
    foreach ( $number as $item) {
        echo "$item <br>";
    }
}

//find largest number in an array
function largest($number)
{
    echo "<p>Largest number of this array is: " . max($number) ." </p>";
}


//remove dupes
function removeDups($number)
{
    $result = array();
    foreach ($number as $key => $value)
    {
        if(!in_array($value, $result))
            print  $result[$key]=$value . "<br>";
    }
}

//sorted array
function distribution($number)
{
     print_r (array_count_values($number));
}


