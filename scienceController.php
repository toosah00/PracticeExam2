<?php

    require_once 'ScientistDAO';

    if(isset($_REQUEST['action'])){
        $action = $_REQUEST['action'];
    }else{
        $action = "list";
    }


    if($action = 'list'){
        $sciDAO = new ScientistDAO();
        $scientist = $sciDAO->getScientist();
        include 'listScientist.php';
    }
?>