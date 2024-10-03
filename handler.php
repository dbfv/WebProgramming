<?php

function solveQuadraticEquation($a, $b, $c){
    $delta = pow($b, 2) - 4*$a*$c;
    $message = '';

    if ($delta < 0) { 
        $imaginaryRoot = sqrt(abs($delta))/(2*$a);
        $message = "There are no real roots, but two imaginary roots: .-$b/(2*$a) ± .$imaginaryRoot*i";
    } elseif ($delta == 0) { 
        $root = -$b/(2*$a);
        $message = "There is one root: .$root";
    } else {
        $root1 = (-$b + sqrt($delta))/(2*$a);
        $root2 = (-$b - sqrt($delta))/(2*$a);
        $message = "There are two roots: .$root1 and .$root2";
    }
    return $message;
};

if (!isset($_POST['a'])){
    $message = 'Please enter the values of a, b, and c'; 
    include "/template/index.html.php"; 
} else { 
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $result = solveQuadraticEquation($a, $b, $c);
    $message = $result;
    include "/template/result.html.php";
}