<?php
    /**
     * functions exlored:
     * 1. strlen()
     * 2. str_word_count()
     * 3. str_contains()
     * 4. strpos()
     * 5. str_starts_with()
     * 6. str_ends_with()
     */


    echo "length of name tanvir: ", strlen('tanvir');

    echo "<br/>";

    echo "Number of words in this string (hello I am tanvir) : ";
    echo str_word_count("hello I am tanvir");

    echo "<br/>";
    $txt = " I really love PHP!";
    echo var_dump(str_contains($txt, 'love')); 
    echo "<br/>";
    echo var_dump(str_contains($txt, 'Love')); //str_contains is case sesnstive love & Love not same

    echo "<br>";
    echo strpos("hello world","world");

    echo "<br>";
    $txt1 = "I really love PHP!";

    var_dump(str_starts_with($txt1,"I really")); //str_starts_with case-sensitive
    echo "<br/>";
    var_dump(str_ends_with($txt1,"PHP!"));

?>