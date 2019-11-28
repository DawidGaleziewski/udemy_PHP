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
    // Normal array
     $number = array(10, 20, 30, 40);

     echo $number[0] . "<br>";

    //  Associative array
    // It has labels (called keys)
    $names = array("first_name" => "Maria", "last_name" => "Gonzales");

    print_r($names);

    echo '<br>' . $names["first_name"] . $names["last_name"]

    // ! only diffrance is that under the hood normal array assigns indexes as keys, and assoc array assigns labels

    ?>
</body>
</html>