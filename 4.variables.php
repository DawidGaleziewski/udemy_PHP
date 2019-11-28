<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
    // declaring variable and assign value
    $name = "Edwin";
    $number = 100;

    // Best practise is camel case for php
    $numberList = 100;

    // Snake case is also sometimes used
    $Number_List = 100;

    // ! PHP is case sensitive
    $NUMBER = 100;

    // Datatypes
        // Int
        $numberType = 100;

        // Float - it take more memory in php
        $floatType = 100.25;

        // String
        $stringType = "Howdy!";

    // Concat in php. It is done by using dot "."

    echo $name . " " . $numberList . " " . $stringType;
    
    $headerTag = "<h1> Hello </h1>";

    // We can echo HTMl tags
    echo $headerTag;

?>
</body>
</html>