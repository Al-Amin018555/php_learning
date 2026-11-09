<?php

    $x = "hello world!";
    echo strtoupper($x);
    echo "<br>";
    echo strtolower($x);

    /*
     str_replace(search, replace, subject, [count]);

     প্যারামিটারগুলোর ব্যাখ্যা:
     1. search: আপনি যে শব্দ বা অক্ষরটি পরিবর্তন করতে চান (যা খুঁজছেন)।
     2. replace: খুঁজে পাওয়া শব্দটির জায়গায় আপনি নতুন যে শব্দটি বসাতে চান।
     3. subject: মূল লেখা বা স্ট্রিং, যেটির ভেতরে আপনি পরিবর্তন করতে চান।
     4. count (ঐচ্ছিক/Optional):** এটি একটি ভ্যারিয়েবল, যা গণনা করে যে পুরো লেখায় কতবার শব্দটি পরিবর্তন করা হয়েছে।
    */
    
    $text = "I love to eat mango also mango drinks";
    echo "<br>", str_replace("mango","apple",$text);

    echo "<br>";
    $name = "tanvir";
    echo strrev($name);

    echo "<br>";
    $text2 = "    white space  ";
    echo "<input value='" . $text2 . "'>";
    echo "<br>";
    echo "<input value='" . trim($text2) . "'>";

    echo "<br>";
    $explodeText = "hello lovely world!";
    $result = explode(" ",$explodeText);

    // echo শুধু স্ট্রিং বা সংখ্যা প্রিন্ট করতে পারে। অ্যারে দিলে PHP সেটাকে স্ট্রিংয়ে রূপান্তর করার চেষ্টা করে, কিন্তু পারে না। তখন সে ওয়ার্নিং দেয় “Array to string conversion” এবং আউটপুটে শুধু Array শব্দটি লিখে দেয়।

    print_r($result);

?>