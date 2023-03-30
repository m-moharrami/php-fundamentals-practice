<?php
    // For Loop
    // for($x = 0; $x <= 10; $x++) {
    //     echo 'Number ' . $x . '</br>';
    // }


    // While Loop
    // $x = 1;

    // while($x <= 15) {
    //     echo 'Number ' . $x . '</br>';
    //     $x++;
    // }


    // Do While Loop
    // do...while loops will always execute the block of code once, even if the condition is false
    // $x = 1;

    // do {
    //     echo 'Number ' . $x . '</br>';
    //     $x++;
    // } while($x <= 5);


    // Foreach Loop
    $posts = ['First Post', 'Second Post', 'Third Post'];

    foreach($posts as $post) {
        echo $post;
    }

    echo '</br>' . '---------------------------------------' . '</br>';

    //can also use index, like below:
    foreach($posts as $index => $post) {
        echo $index+1 . ' - ' . $post . '</br>';
    }