<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receiving Input</title>
</head>
<body>

    <?php
        $name = $_GET["name"];
        $class = $_GET["class"];
        $university= $_GET["university"];
        $hobby = $_GET["hobby"];
        print("<br>Hello, $name");
        print("<br>You are studying at $class, $university");
        echo "<br>Your hobby is:";
        echo "$hobby";
    ?>
</body>
</html>