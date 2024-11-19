<?php
Class Scientist {
    public $name;
    public $timePeriod;
    public $nationality;
    public $contribution;

    public function load($row){
        $this->$name = $row['name'];
        $this->$timePeriod = $row['timePeriod'];
        $this->$nationality = $row['nationality'];
        $this->contribution = $row['contribution'];


    }
}
?>