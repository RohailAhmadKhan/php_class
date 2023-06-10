<?php
    require_once('classOne.php');
    class Testtwo extends Test {

    }


    $class2 = new Testtwo();
    echo $class2->abc() . PHP_EOL;
    echo $class2->def();
    
?>