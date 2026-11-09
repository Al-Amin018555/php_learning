<?php
    $x = "hello";
    $z = "world";
    $y = $x . " " . $z;
    echo $y;
    echo "<br>";

    //another way using double quotes
    $y = "$x $z";
    echo $y;
    echo "<br>";

    $x = 5;
    $y = 10;
    $z = "$x . $y";
    echo $z;
?>