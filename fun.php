<?php

$operator = $_POST['operator'];
$numberOne = $_POST['numOne'];
$numberTwo = $_POST['numTwo'];

$sum = operation ($numberOne, $numberTwo, $operator);

function operation( $numOne, $numTwo, $operator)
{
    if ($operator == 'add') {
        $sum = $numOne + $numTwo;
        return $sum;

    } elseif ($operator == 'subtract') {
        $sum = $numOne - $numTwo;
        return $sum;

    } elseif ($operator == 'multiply') {
        $sum = $numOne * $numTwo;
        return $sum;

    } elseif ($operator == 'divide') {
        $sum = $numOne / $numTwo;
        return $sum;
    }

}

echo ($sum);