<?php
// Menghubungkan dengan file 1
include 'variable1.php';

// Perulangan untuk memeriksa usia setiap siswa
foreach ($students as $student) {
    echo 'Name: ' . $student->name . ' - ';

    if($student->age >= 18){
        echo "You are an adult!.<br>";
    } else {
        echo "You are a minor!.<br>";
    }
}
?>
