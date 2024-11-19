<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Scientist</title>
</head>
<body>

<?php
    for($i = 0; $i < count($scientist);$i++){
        echo $scientist[$i]->$name;
        echo $scientist[$i]->$timePeriod;
        echo $scientist[$i]->$nationality;
        echo $scientist[$i]->$contribution;
    }
?>
    
</body>
</html>