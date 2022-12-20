<?php

    $products = [
        ['name'=>'Leather Bag', 'price'=>1800],
        ['name'=>'Reebok Joggers', 'price'=>700],
        ['name'=>'Sunglass', 'price'=>450],
        ['name'=>'Beanie', 'price'=>300],
    ];

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials</title>
</head>
<body>
    <h1>Products Bought Recently</h1>
    <ul>
        <?php foreach($products as $product){ ?>
            <h3><?php echo $product['name']; ?></h3>
            <p>Rs. <?php echo $product['price']; ?></p>
        <?php } ?>
</body>
</html>