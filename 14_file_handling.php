<?php 
/* ---------------- File Handling ---------------- */

/*
    File handling is the ability to read and write files on the server.
    PHP has built-in functions for reading and writing files.
*/

$file = 'extras/users.txt';

if(file_exists($file)) {
    // echo readfile($file);

    $handle = fopen($file, 'r');  // r stands for reading
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');  // w stands for writing 
    $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Moharram';
    fwrite($handle, $contents);
    fclose($handle);
}