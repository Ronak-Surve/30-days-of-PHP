<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <!-- output a string -->
    <?php  if(true)    { ?>
            <h1> Hello PHP </h1>
    <?php } ?>

    <!-- data type and type check -->
    <?php 
        $a = 12.5;
        $itr = array("h","e","l","l","o");
        echo var_dump($itr);

        $map = [
            "get"  =>  "details visible in url",
            "post" =>  "details not visible in url",
        ];
        echo "<br>";
        echo var_dump($map);
    ?>

    <!-- server superglobal variable -->
    <?php
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"];

    ?>


</body>
</html>