<!-- We can left the php tag unclosed if there isn't any html code after that, so from this one on I'll do that -->
<?php
    // Simple Array
    $numbers = [1, 2, 3, 4, 5];
    $fruits = array('apple', 'orange', 'cucumber');

    print_r($numbers);
    echo $fruits[1];
    echo '</br>';

    // Associative Array
    $colors = [
        1 => 'red',
        4 => 'blue',
        7 => 'yellow'
    ];

    echo $colors[4];
    echo '</br>';

    $person = [
        'first_name' => 'moharram',
        'last_name' => 'moharrami',
        'email' => 'moharram.m98@gmail.com'
    ];

    echo $person['first_name'];

    // Multi Dimensional Arrays
    $people = [
        [
            'first_name' => 'moharram',
            'last_name' => 'moharrami',
            'email' => 'moharram.m98@gmail.com'
        ],
        [
            'first_name' => 'zar',
            'last_name' => 'moharrami',
            'email' => 'zariosh@gmail.com'
        ],
        [
            'first_name' => 'john',
            'last_name' => 'doe',
            'email' => 'jdoe@gmail.com'
        ]
    ];

    echo '</br>' . $people[1]['email'];
    // Can use `json_encode` to convert any associative array to json format