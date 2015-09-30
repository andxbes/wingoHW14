<?php

include_once '../config.php';
include_once '../dao/students.php';

$patern = "/^\d+$/";

//print_r($_POST);

$subId = $_POST['subId'];
$nameId = $_POST['nameId'];
$mark = $_POST['mark'];


if (preg_match($patern, $subId) &&
        preg_match($patern, $nameId) &&
        preg_match($patern, $mark) && $mark <= 5) {

    $id = $_POST['id'];
    $student = new Students();
    
    $student->addMarktoStudent($nameId, $subId, $mark);
}
else {
    die("Недопустимый запрос");
}

