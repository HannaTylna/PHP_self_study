<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "New page"; ?></title>
</head>
<body>
    <?php 
        echo "Current date and time";//comments
        echo date(DATE_RSS);#one more comment
        echo " <br>";
        /*
        One more variant of comments
        */
        include "second.php";
    ?>
    <br>
    <?php 
        echo 9 + 3 - 4;
        echo "Text";
    ?>
    <br>
    <?php 
    if(mt_rand(0, 1)){
        ?>
        <div style="color: #499edf">Blue color</div>
        <?php
    } else {
        ?>
        <div style="color: #808080">Grey color</div>
        <?php
    }
    ?>
    
</body>
</html>
