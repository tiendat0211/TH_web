<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date Time Processing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <br>
        <?php
            echo "Enter your name anh select date and time for the appointment";
        ?>
        <form action="DateTimeProcessing.php" method="get">
            <?php
                if(array_key_exists("Date",$_GET)){
                    $date=$_GET["Date"];$month=$_GET["Month"];$year=$_GET["Year"];$hour=$_GET["Hour"];
                    $minute=$_GET["Minute"];$second=$_GET["Second"]; $name=$_GET["name"];
                }else{
                    $date=0;$month=0;$year=0;$hour=0;$minute=0;$second=0;$name=null;
                }
            ?>
            <br>
            <div class="row">
                <div class="col-15">
                    <lable>Your name:</lable>
                </div>
                <div class="col-85">
                    <input type="text" name="name" placeholder="Name..." value="<?php if($name!=null) echo $name;?>" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-15">
                    <lable>Date:</lable>
                </div>
                <div class="col-85">

                        <select name="Date">
                            <?php
                            for ($i=1;$i<=31;$i++){
                                if ($date==$i){
                                    print ("<option selected>$i</option>");
                                }else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>

                        <select name="Month">
                            <?php
                            for ($i=1;$i<=12;$i++){
                                if ($month==$i){
                                    print ("<option selected>$i</option>");
                                }else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>

                        <select name="Year">
                            <?php
                            for ($i=1900;$i<=2020;$i++){
                                if ($year==$i){
                                    print ("<option selected>$i</option>");
                                }else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-15">
                    <lable>Time:</lable>
                </div>
                <div class="col-85">

                            <select name="Hour">
                                <?php
                                for ($i=0;$i<=23;$i++){
                                    if ($hour==$i){
                                        print ("<option selected>$i</option>");
                                    }else{
                                        print ("<option>$i</option>");
                                    }
                                }
                                ?>
                            </select>


                            <select name="Minute">
                                <?php
                                for ($i=0;$i<=59;$i++){
                                    if ($minute==$i){
                                        print ("<option selected>$i</option>");
                                    }else{
                                        print ("<option>$i</option>");
                                    }
                                }
                                ?>
                            </select>


                            <select name="Second">
                                <?php
                                for ($i=1;$i<=59;$i++){
                                    if ($second==$i){
                                        print ("<option selected>$i</option>");
                                    }else{
                                        print ("<option>$i</option>");
                                    }
                                }
                                ?>
                            </select>

                </div>
            </div>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
        <br><br><br>
        <?php
            include_once('VerifyValue.php');
            $checkDate=1;
            $check=0;//check Năm nhuận
            $checkTime=0;//Check hour if hour>12 ==> PM
            $check=CheckYear($year);
            print ("<br>Hi $name! ");
            print ("<br>You have choose to have an appointment on $hour:$minute:$second,$date/$month/$year");
            $checkDate=verifyDate($date,$month);
            if ($checkDate==1){
                print ("<br><br>More infomation");
                $checkTime=verifyTime($hour);
                if ($checkTime==1){
                    $hour=$hour-12;
                    print ("<br><br>In 12 hours, the time and date is $hour:$minute:$second PM, $date/$month/$year");
                }else{
                    print ("<br><br>In 12 hours, the time and date is $hour:$minute:$second AM, $date/$month/$year");
                }

                verifyMonth($month,$check);
            }
            else print("<br><br>This day is not true. Please choose day again!");
        ?>
    </div>
</body>
</html>