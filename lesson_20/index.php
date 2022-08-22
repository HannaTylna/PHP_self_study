<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>
<body>
    <?php 
        $char = 'c++';
        if ($char == 'php'){
    ?>
        <h1>Language is PHP</h1> 
    <?php
        } elseif($char == 'js'){
    ?>
        <h1>Language is JS</h1>
    <?php
        } elseif($char == 'c#'){
    ?>
        <h1>Language is c#</h1>
    <?php
        } else {
    ?>
        <h1>Language is unknown</h1>
    <?php
        }
    ?>
</body>
</html>