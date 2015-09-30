<?php
//include_once '../config.php';
class Students {
    
    
    function addStudents($name, $surname) {
        $query = "INSERT INTO students (name,surname)"
                . "VALUES ('$name' , '$surname')";
        $this->execute($query);
    }
    
     function addMarktoStudent($nameId,$subId,$mark) {
        $query = "INSERT INTO marks (studentId,mark,subjectId)"
                . "VALUES ('$nameId' ,'$mark', '$subId')";
        $this->execute($query);
    }
    
    function getTheirSubjects() {
        $query = 'SELECT id, name FROM subjects';
        return $this->execute($query)->fetchall();
    } 
            

    function getAllNamesOfStudents() {
        $query = 'SELECT id, name , surname FROM students';
        return $this->execute($query)->fetchall();
    }

    function getProgressForStudent($id) {
        $query = "SELECT m.mark , s.name as 'predmet'
                  FROM marks m 
                  INNER JOIN subjects s ON m.subjectID=s.id 
                  WHERE m.studentId='$id'";
        return $this->execute($query)->fetchAll();
    }

    private function execute($query) {
        $data = null;
        $pdoData = Students::getPDO()->prepare($query);
        $pdoData->execute();
        $responseMassage = $pdoData->errorInfo(); //Объект с сообщением  и кодом о проведеной операции 
        if ($responseMassage[0] == 0) { //если выборка прошла то ....
            $data = $pdoData;
        }else{
            echo $responseMassage[1];
        }
        return $data;
    }

    private static function getPDO() {
       
        $pdo ;
        try {
            $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
            $pdo->exec('SET NAMES utf8');
        } catch (PDOException $e) {
            die('Подключение не удалось: ' + $e->getMessage());
        }
        return $pdo;
    }

}


