<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic functions</title>
</head>
<body>
    <?php 
        $user = "Elle";
        if(isset($user))
            echo "The user isset!";
        else
            echo "The user is not set!";
    ?>
    <?php 
        echo "<br>";
    ?>
    <?php 
        $str = "sjsalasöas";
        if(empty($str))
            echo "A string is empty!";
        else
            echo "A string is provided!"
    ?>
    <?php 
        echo "<br>";
    ?>
    <?php 
        echo gettype(Helen);
        echo "<br>";
        echo gettype(1.2345);
        echo "<br>";
        echo gettype(153);
        echo "<br>";
        echo gettype(false);
    ?>
    <?php 
        echo "<br>";
    ?>
    <?php 
        echo is_bool(false);
    ?>
    <?php 
        echo "<br>";
    ?>
    <?php 
        if(is_bool(false))
            echo "This is boolean";
        else
            echo "This is not boolean"
    ?>
</body>
</html>