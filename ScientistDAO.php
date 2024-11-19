<?php
require_once 'Scientist.php';
class ScientistDAO {

    public function getConnection(){
        $mysqli = new mysqli("127.0.0.1","exam2user" , "exam2pass" , "practiceExam2");
        return $mysqli;
    }


    public function getScientist(){
        $connection = getConnection();
        $stmt = $connection->prepare("SELECT * FROM scientist;");
        $stmt->execute();
        $results = $stmt->get_result();
        while($row = $results->fetch_assoc()){
            $sci = new Scientist();
            $sci->load($row);
            $scientist[]= $sci;
        }
        $stmt->close();
        $connection->close();
        return $scientist;

    }
}



?>