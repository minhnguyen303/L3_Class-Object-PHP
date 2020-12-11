<?php
include_once "QuadraticEquation.php";

$quadratic = new QuadraticEquation(1,2,3);
$discriminant = $quadratic->getDiscriminant();

if ($discriminant > 0){
    echo $quadratic->getRoot1() . " and " . $quadratic->getRoot2();
}
elseif ($discriminant == 0){
    echo $quadratic->getRoot1();
}
else{
    echo "The equation has no roots.";
}