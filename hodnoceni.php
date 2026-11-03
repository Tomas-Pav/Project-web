<?php
$studentname="Jan Novák";
$test1=75;
$test2=90;
$test3=60;
$result=$test1+$test2+$test3;
$divided=$result/3;
$percent=$result/3;
if($result>270){
    $grade=1;
}
elseif ($result<240&&$result>225){
    $grade=2;
}
elseif($result<225&&$result>180){
    $grade=3;
}
elseif($result<180&&$result>120){
    $grade=4;
}
elseif($result<120){
    $grade=5;
}
echo "<studentname>";
echo"<test1>";
echo"<test2>";
echo"<test3>";
echo"<result1>";
echo"<divided>";
echo"<percent>+%";
echo"<grade>";