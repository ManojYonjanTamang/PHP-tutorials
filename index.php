<?php 
    
    define('NAME', 'Manoj Tamang');

    $stringOne = 'My email address is ';
    $stringTwo = 'yonjantamang5@gmail.com';
    echo $stringOne . $stringTwo;


    $name = 'Manoj';
    echo 'Hello, my name is ' . $name; //(' ' vs " ")
    echo "Hello, my name is $name";

    echo "She said, \"Hello beautiful.\" ";
    echo 'She said, "Hello beautiful."';

    echo $name[0];
    echo strlen($name);
    echo strtoupper($name);
    echo strtolower($name);
    echo str_replace('j', 'se', $name);

    $radius = 5;
    echo $radius**2;
    $radius += 5;
    echo $radius;
    $radius++;
    echo $radius;

    $pi = 3.14;
    echo floor($pi);
    echo ceil($pi);
    echo pi();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorial</title>
    </head>
    <body>
        <h1><?php echo NAME; ?></h1>
    </body>
</html>