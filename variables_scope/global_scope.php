<?php
    $x = 5; //global scope

    function myTest(){
        echo "variable x inside function is: $x <br/>";
    }
    myTest();

    echo "variable x outside function is: $x";
?>