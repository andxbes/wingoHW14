<?php
session_start();
require_once'./config.php';
include_once './dao/students.php';


//include_once './task.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor. 
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>hi</title>
        <link rel="stylesheet" href="resources/css/style.css"
    </head>
    <body>
        <div class="body">
        <div class="leftPane">
            <?php
            include_once './views/students_list.php';
            ?>
        </div>
        <div class="rightPane">
            <div id="addUserToBd">
                <?php include './views/addStudentsForm.php'; ?>
            </div>
            <div id="markforStudent">
                <?php include './views/addMark.php'; ?>
            </div>

        </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="./resources/js/script.js"></script>
</body>
</html>



