<?php 
    $name = 'moharram';  // string
    $age = 25;  // Int
    $has_kids = false;  // Boolean 
    $cash_on_hand = 230.54;  // Float 

    echo $name;
    echo $age;
    echo $cash_on_hand;

    echo '</br>';

    echo $name . ' is ' . $age . ' years old.' . '</br>';

    // Can use this way too, and it's more convenient (possible just in between double quotes)
    echo "$name is $age years old.";
    echo '</br>';

    // Constants | first argument is name of the constant and second one is the value
    define ('HOST', 'localhost');
    define ('DB_NAME', 'dev_db');

    echo HOST;
?>