<?php
require_once '../config.php';
require_once '../dao/students.php';

$paternName = "/^\[a-zA-Z]|[а-яА-Я]+$/";

$name = $_POST['name'];
$surname = $_POST['surname'];

if(preg_match($paternName, $name) && preg_match($paternName, $surname)){
    $student = new Students();
    $student->addStudents($name, $surname);
    
    echo "OK";
}else {
    die("Недопустимый запрос");
    //сообщение выводится но ajax не считает его за ошибку .
}

