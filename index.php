<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--____________________Array_(1)____________________<br>-->
<!--<br>____________________task_1.1____________________<br>-->
<?php
//$arr=["Привет, ","мир","!"];
//echo $arr[0].$arr[1].$arr[2];
//?>
<!--<br>____________________task_2.1____________________<br>-->
<?php
//$arr=[
//    "a"=>1,
//    "b"=>2,
//    "c"=>3
//];
//echo $arr["c"];
//?>
<!--<br>____________________task_3.1____________________<br>-->
<?php
//$arr=[
//    "Петя"=>200,
//    "Коля"=>300,
//    "Вася"=>800
//];
//echo "Зарплата Пети ".$arr["Петя"]."долларов<br>";
//echo "Зарплата Коли ".$arr["Коля"]."долларов<br>";
//?>
<!--<br>____________________task_4.1____________________<br>-->
<?php
//$arr=["a","b","c"];
//var_dump($arr);
//?>
<!--<br>____________________task_5.1____________________<br>-->
<?php
//$arr=["a","b","c"];
//echo "<p>".$arr[0]."</p>";
//echo "<p>".$arr[1]."</p>";
//echo "<p>".$arr[2]."</p>";
//?>
<!--<br>____________________task_6.1____________________<br>-->
<?php
//$arr=[1,2,3,4,5,6,7,8,9];
//for ($i=0,$sum=0;$i<count($arr);$sum+=$arr[$i],$i++);
//echo $sum;
//?>
<!--<br>____________________task_7.1____________________<br>-->
<?php
//$arr=[
//1=>"пн",
//2=>"вт",
//3=>"ср",
//4=>"чт",
//5=>"пт",
//6=>"сб",
//7=>"вс"
//];
//echo $arr["6"];
//?>
<!--<br>____________________task_8.1____________________<br>-->
<?php
//$arr=[
//    "cms"=>["joomla","drupal","wordpress",],
//    "colors"=>["зеленыый","синий","красный"]
//];
//echo $arr["cms"][0]."<br>";
//echo $arr["cms"][1]."<br>";
//echo $arr["colors"][0]."<br>";
//echo $arr["colors"][2]."<br>";
//?>
<!--<br>____________________task_9.1____________________<br>-->
<?php
//$arr=[
//    'ru'=>['пн','вт','ср','чт','пт','сб','вс'],
//    'en'=>['mn','td','wd','th','fr','st','sd'],
//];
//echo $arr['ru'][0]."<br>";
//echo $arr['en'][2]."<br>";
//?>
<!--<br>____________________task_10.1____________________<br>-->
<?php
//$lang="ru";
//$day="3";
//$arr=[
//    'ru'=>['','пн','вт','ср','чт','пт','сб','вс'],
//    'en'=>['','mn','td','wd','th','fr','st','sd'],
//];
//echo $arr[$lang][$day]."<br>";
//?>
<!--<br>____________________foreach(2)____________________<br>-->
<!--<br>____________________task_2.1____________________<br>-->
<?php
//$arr=[10,20,15,17,24,35];
//$result=0;
//for ($i=0;$i<count($arr);$i++){
//    $result+=$arr[$i];
//};
//echo $result;
//?>
<!--<br>____________________task_2.2____________________<br>-->
<?php
//$arr=["html","css","php","js","jq"];
//foreach ($arr as $elem) {
//    echo $elem."<br>";
//};
//?>
<!--<br>____________________task_2.3____________________<br>-->
<?php
//$arr=[1,2,3,4,5];
//$result=0;
//foreach ($arr as $elem) {
//    $result+=$elem;
//};
//echo $result;
//?>
<!--<br>____________________task_2.4____________________<br>-->
<?php
//$arr=[1,2,3,4,5];
//$result=0;
//foreach ($arr as $elem) {
//    $result+=$elem*$elem;
//};
//echo $result;
//?>
<!--<br>____________________task_2.5____________________<br>-->
<?php
//$arr=[
//    "green"=>"зеленый",
//    "red"=>"красный",
//    "blue"=>"голубой"
//];
//foreach ($arr as $key=>$elem) {
//    echo $key."-".$elem."<br>";
//};
//?>
<!--<br>____________________task_2.6____________________<br>-->
<?php
//$arr=[
//    "Коля"=>200,
//    "Вася"=>300,
//    "Петя"=>400,
//];
//foreach ($arr as $key=>$elem) {
//    echo $key."- зарплата ".$elem." долларов.<br>";
//};
//?>
<!--<br>____________________tasks_(3)____________________<br>-->
<!--<br>____________________tasks_3.1____________________<br>-->
<?php
//$day=-2;
//if ($day>=1 && $day<11) {
//    echo "Это первая декада";
//} elseif ($day>=11 && $day<21) {
//    echo "Это вторая декада";
//} elseif ($day>=21 && $day<=31) {
//    echo "Это третья декада";
//} else { echo "В точно с планеты Земля?";};
//?>
<!--<br>____________________tasks_3.2____________________<br>-->
<?php
//$month=10;
//if ($month==1 || $month==2 || $month==12) {
//    echo "Зима";
//} elseif ($month>=3 && $month<6) {
//    echo "Весна";
//} elseif ($month>=6 && $month <9 ) {
//    echo "Лето";
//} elseif ($month>=9 && $month<12) {
//    echo "Осень";
//};
//?>
<!--<br>____________________tasks_3.3____________________<br>-->
<?php
//$year=410;
//if ($year%4==0 && $year%100!==0 || $year%400==0) {
//    echo $year."-этот год високосный";
//} else {
//    echo $year."- этот год не високосный";
//};
//?>
<!--<br>____________________tasks_3.4____________________<br>-->
<?php
//$str="abcde";
//if (strpos($str,"a")===0) {
//    echo "Да";
//} else {
//    echo "Нет";
//};
//?>
<!--<br>____________________tasks_3.5____________________<br>-->
<?php
//$str="12345";
//if (strpos($str,"1")===0) {
//    echo "Да";
//} else {
//    echo "Нет";
//};
//?>
<!--<br>____________________tasks_3.6____________________<br>-->
<?php
//$str="123";
//$sum=array_sum(str_split($str,1));
//var_dump($sum);
//?>
<!--<br>____________________tasks_3.7____________________<br>-->
<?php
//$str="123456";
//$sum=0;
//$sum1=0;
//$arr=str_split($str,1);
//for ($i=0;$i<3;$i++) {
//    $sum+=$arr[$i];
//};
//for ($i=3;$i<=6;$i++) {
//    $sum1+=$arr[$i];
//};
//if ($sum==$sum1) {
//    echo "Да";
//} else {echo "Нет";};
//?>
<!--<br>____________________tasks_3.8____________________<br>-->
<?php
//$arr=[2,5,9,15,0,4];
//foreach ($arr as $elem) {
//    if ($elem>3 && $elem <10) {
//        echo $elem."<br>";
//    };
//}?>
<!--<br>____________________tasks_3.9____________________<br>-->
<?php
//$arr=["пн","вт","ср","чт","пт","сб","вс"];
//foreach ($arr as $key=>$elem){
//    if ($key<5) {
//        echo $elem."<br>";
//    } else {echo "<b>".$elem."</b><br>";}
//};
//?>
<!--<br>____________________tasks_3.10____________________<br>-->
<?php
//$arr=[];
//for ($i=1;$i<=100;$i++) {
//    array_push($arr,$i);
//};
//echo "<pre>";
//var_dump($arr);
//echo "</pre>";
//?>
<!--<br>____________________tasks_3.11____________________<br>-->
<?php
//$en=[];
//$ru=[];
//$arr=[
//   'ru'=>['пн','вт','ср','чт','пт','сб','вс'],
//    'en'=>['mn','td','wd','th','fr','st','sd'],
//];
//foreach ($arr as $key=>$elem) {
//    array_push($en,$key);
//    array_push($ru,$elem);
//};
//echo "<pre>";
//var_dump($en);
//echo "</pre>";
//echo "<pre>";
//var_dump($ru);
//echo "</pre>";
//?>
<!--<br>____________________tasks_3.12.1____________________<br>-->
<?php
//$num=1000;
//$c=0;
//while($num>50){
//    $num/=2;
//    $c++;
//};
//echo $num."<br>".$c;
//?>
<!--<br>____________________tasks_3.12.2____________________<br>-->
<?php
//for ($i=0,$num=1000;$num>50;$num/=2,$i++);
//echo $num."<br>".$c;
//?>
</body>
</html>