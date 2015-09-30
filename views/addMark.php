
<?php $studs = new Students();?>
<form id="addMark">
    <select id="subjectId" name="subjectId">
         
        <?php foreach($studs->getTheirSubjects() as $sub):?>
        <option id="<?=$sub['id']?>" ><?=$sub['name']?></option>
        <?php endforeach;?>
    </select>
     <select id="studentId" name="studentId">
         
        <?php foreach($studs->getAllNamesOfStudents() as $stud):?>
        <option id="<?= $stud['id'] ?>"><?= $stud['name']." ".$stud['surname'] ?></option>
        <?php endforeach;?>
    </select>
    <input id="mark" name="mark" type="text" placeholder="mark"/>
    <input id="addMarkB" type="button" value="Send"/>   
</form>