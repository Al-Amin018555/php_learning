<?php
    $x = 4;
    $y= 10;

    function myTest(){
        global $x,$y;

        $y = $x + $y;

    }
    myTest();
    echo $y;
?>