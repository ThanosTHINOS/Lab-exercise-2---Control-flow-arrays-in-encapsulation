
<?php
// Menghubungkan dengan file 1
include 'variable1.php';

// Fungsi greet yang menerima nama siswa
function greet($name) {
    return "Hello, $name!";
}

// Melakukan perulangan untuk menyapa setiap siswa berdasarkan objek dari file 1
foreach ($students as $student) {
    echo greet($student->name) . "<br>";
}
?>