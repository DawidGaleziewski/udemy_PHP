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
    // you use a array() function to create a array -OLD way
    $numberList = array(23,23,3,4, 'name', '<h1>Header tag</h1>');

    // you can also use same syntax as with JS
    $numberList = [23,23,3,4, 'name', '<h1>Header tag</h1>'];

    // We cannot just display array in browser
    // We can access array values via index like in js
    echo $numberList[5];

    // print_r is printing out the strucute of the array in the browser
    print_r($numberList)
    
    ?>
</body>
</html>