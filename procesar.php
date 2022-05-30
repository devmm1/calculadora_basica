<?php
    require_once "class_calculator.php";
    $cal = new calculator();

    echo $cal->calculate($_POST['value1'],$_POST['value2'],$_POST['option']);
    echo $cal->calculate($_POST['value1'],$_POST['value2'],$_POST['option']);
 ?>