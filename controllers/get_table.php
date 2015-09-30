<?php
include_once '../config.php';
include_once '../dao/students.php';
$patern="/^\d+$/";

if(preg_match($patern, $_POST['id'])){
    $id = $_POST['id'];
    $student = new Students();
   
    echo json_encode($student->getProgressForStudent($id));
}else {
    die("Недопустимый запрос");
}



