<?php 
    $fruits = ['apple', 'orange', 'pear'];

    // Get length
    echo count($fruits) . '</br>';

    // Search array
    var_dump(in_array('apple', $fruits));
    echo '</br>';
    var_dump(in_array('apples', $fruits));
    echo '</br>';

    // Add to array
    $fruits[] = 'grape';
    array_push($fruits, 'blueberry', 'cucumber');    // adds to last index
    array_unshift($fruits, 'mango');    // adds to first index

    // Remove from array
    array_pop($fruits);    // removes from last index
    array_shift($fruits);    // removes from first index
    unset($fruits[2]);    // removes from given index

    // Split into 2 chunks
    $chunked_array = array_chunk($fruits, 2);

    print_r($chunked_array);
    echo '</br>';

    // print_r($fruits);

    // Merge array
    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];

    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2];
    // arr3 and arr4 are literally the same thing

    print_r($arr3);
    echo '</br>';


    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];

    $c = array_combine($a, $b);
    // this uses a's members as keys and b's members as values for those keys

    print_r($c);
    echo '</br>';


    $flipped = array_flip($c);
    // this takes array c, and replace the keys and the values with each other
    print_r($flipped);
    echo '</br>';

    // Automatically assign numbers in a range to an array
    $numbers = range(1, 20);

    print_r($numbers);
    echo '</br>';

    $newNumbers = array_map(function($number) {
        return "Number $number";
    }, $numbers);

    print_r($newNumbers);