<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mojCss.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <h1>Ovo je sa php-om</h1>
    <h1><a href="index.html">Ovo je sa javascript-om</a></h1>

    <?php
        for($i=1; $i<=5; $i++)
            echo "Red broj: $i <br>";
    ?>    

</body>
</html>