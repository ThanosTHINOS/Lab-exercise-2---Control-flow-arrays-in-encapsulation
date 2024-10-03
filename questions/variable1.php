<?php
class Student
{
    var $name;
    var $sex;
    var $age;
    var $gpa;
    var $isStudent;

    function __construct($name, $sex, $birthDate, $gpa, $isStudent)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = floor((strtotime(date("d-m-Y")) - strtotime($birthDate)) / 86400 / 365) . ' years';
        $this->gpa = $gpa;
        $this->isStudent = $isStudent;
    }
}

$students = [
    new Student("tino", "Male", "07-12-2004", 3.66, false),
    new Student("teno", "Male", "07-12-2006", 3.66, true),
    new Student("tano", "Male", "07-12-2004", 3.66, true),
    new Student("tuno", "Male", "07-12-2007", 3.66, true),
    new Student("tono", "Male", "07-12-2004", 3.66, true)
];

foreach ($students as $student) {
    echo '
        Name: ' . $student->name . '<br>
        Sex: ' . $student->sex . '<br>
        Age: ' . $student->age . '<br>
        GPA: ' . $student->gpa . '<br>
        Is Student: ' . ($student->isStudent ? "Yes" : "No") . '<br><br>
    ';
}
?>
