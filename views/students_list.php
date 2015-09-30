
<?php
//include_once '../dao/students.php';
$students = new Students();
?>
<div id="students_list">
    <ul>
        <?php
        //print_r($students->getAllNamesOfStudents());

        foreach ($students->getAllNamesOfStudents() as $student) :?>
        
            <li><a id="<?= $student['id'] ?>" href="#"><?= $student['name']." ".$student['surname'] ?></a></li>

        <?php endforeach; ?>
    </ul>
</div>
