<?php
    $age = 16; 

    if($age >= 14) {
        echo 'You are old enough to drink';
    } else {
        echo 'You have to suck this for now';
    }

    echo '</br>';

    $posts = ['First Post'];

    // if(!empty($posts)) {
    //     echo $posts[0];
    // } else {
    //     echo 'No Posts';
    // }

    // Ternary Operators
    echo !empty($posts) ? $posts[0] : 'No Posts';  // Just like in JS
    echo '</br>';

    // Switches
    $favcolor = 'red';

    switch($favcolor) {
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is not red, blue, or green';
    }