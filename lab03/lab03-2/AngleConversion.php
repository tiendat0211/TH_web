<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Angle Conversion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="container">
            <form action="AngleConversion.php" method="get">
                <?php
                    if (array_key_exists("Angle",$_GET)){
                        $angle=$_GET["Angle"];$convert=$_GET["Convert"];
                    }else{
                        $angle=0;$convert=null;
                    }
                ?>
                <div class="row">
                    <div class="col-15">
                        <p>Enter your angle:</p>
                    </div>
                    <div class="col-85">
                        <input type="text" name="Angle" placeholder="Your angle...."<?php if($angle!=0) echo $angle;?>>
                    </div>
                    <br>
                    <div class="convert_angle">
                        <input type="radio" id="radians" name="Convert" value="To Radians">
                        <label for="radians">Degrees to Radians</label>
                        <input type="radio" id="degrees" name="Convert" value="To Degrees">
                        <label for="degrees">Radians to Degrees</label>
                    </div>
                    <input type="submit" value="Submit">
                </div>
            </form>
            <br><br>
            <?php
                function AngleConvert($angle,$convert){
                    if ($convert=="To Radians"){
                        $angle=$angle/180*3.14;
                    }
                    if ($convert=="To Degrees"){
                        $angle=$angle*180/3.14;
                    }
                    return $angle;
                }
                $result=round(AngleConvert($angle,$convert),4);
                if ($angle!=null){
                    print ("Thank you for your choose!");
                    if ($convert=="To Degrees") print ("<br>The result is: $angle(rad)= $result °" );
                    if ($convert=="To Radians") print ("<br>The result is: $angle °= $result (rad)" );
                }

            ?>
        </div>
</body>
</html>
