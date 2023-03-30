<?php
    // declare 
    function registerUser($email) {
        echo $email . ' User registered';
    }
    // run
    // registerUser('moharram.m98@gmail.com');


    function sum($n1, $n2) {
        return $n1 + $n2;
    }

    echo sum(5, 4);
    echo '</br>';

    $number = sum(5, 5);
    echo $number . '</br>';


    // Default Arguments 
    function sum2($n1 = 4, $n2 = 5) {
        return $n1 + $n2;
    }

    $number = sum2();
    echo $number . '</br>';


    // Anonymous Function
    $subtract = function($n1, $n2) {
        return $n1 - $n2;
    };

    echo $subtract(10, 5) . '</br>';


    // Arrow Function
    $multiply = fn($n1, $n2) => $n1 * $n2;

    echo $multiply(9, 9);