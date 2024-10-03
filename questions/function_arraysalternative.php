<?php
// func greet
include 'variable1.php';
function greet($name) {
    return "Hello, $name!";
}

// buat array
$students = ['Hi tino', 'Hi teno', 'Hi tano', 'Hi tuno', 'Hi tono'];

// loop nya menyapa 5 murid tersebut
foreach ($students as $name) {
    echo greet($name) . "\n";
}
?>