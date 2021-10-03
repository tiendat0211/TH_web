<?php

    function verifyDate($date,$month){
        if ($month==4||$month==6||$month==9||$month==11){
            if ($date>30) return 0;
                else return 1;
        }
        if ($month==2){
            if ($date>=30){
                return 0;
            }else return 1;
        }
        if ($month==1||$month==3||$month==5||$month==7||$month==8||$month==10||$month==12) return 1;
    }


    function verifyTime($hour){
            if($hour>12) return 1;//PM
            else return 0;//AM
        };

    function CheckYear($Year){
        if ($Year%4 ==0 && $Year%100 ==0 ){
            if ($Year%400 ==0) return 1;//Năm nhuận
            else return 0;
        }

        if ($Year%4 ==0){
            return 1;//Năm nhuận
        } else return 0;

    }

    function verifyMonth($month,$check){

        if ($month==1||$month==3||$month==5||$month==7||$month==8||$month==10||$month==12) echo "<br><br>This month has 31 days";
        if ($month==4||$month==6||$month==9||$month==11) echo "<br><br>This month has 30 days";
        if($month==2) {
                if ($check==1) echo "<br><br>This month has 29 days";
                if ($check==0) echo "<br><br>This month has 28 days";
            }
        }

?>
