<?php
/////lec1
// echo "welcome";
// $name='aya';
// $age=20;
// echo 'Name'.$name;
// echo "Age $age";

// //Array

// $arr=[1,2,3,4];
// print_r($arr);
// var_dump($arr);
// echo "///////";
// is_string($name);

// //lec2

// $age=20;//declalation
// $age=80;//initi

// // const By=3.14;
// // echo By;
// define('By',3.14);
// echo constant('By');

//Conditions:
// 1-if(cond.){act.}
// 2-if(cond.){act.}else{act.}
// 3-elseif(cond.){act}
// 4-switch()

// if($age>18){
//     echo 'عز شبابك';
// }else{
//     echo "لساتك طفل";
// }

// if($age >60 ){
//     echo 'أنت على حفة القبر عزيزي الحاج';
// }elseif($age >18){
//         echo 'عز شبابك';
//     }else{
//         echo "لساتك طفل";
//     }

// $day = "sat" ;
// switch($day){
//     case "sat":
//         echo "Today is Saturday";
//         break;
//     case "sun":
//         echo "Today is Sunday";
//         break;
// default:{
//     echo "Today is Friday";
// }
// }

$color ="pink";

///Arrays
// 1-index array
// 2-asso. Array
// 3-multidimintion Array
//  *1*
// $array =['aya', 'ali', 'ahmed' , 5];
//print_r($array);
// $array[]="aiyla";
// $array[1]="adnan";
// unset($array[1]);
// echo "<pre>";
// var_dump($array);
// echo "</pre>";

//  *2*
// $array = [
//     'ali' => 21,
//     'aya' => 20,
//     'aiyla' => 18,

// ];
// $keys = array_keys($array);
// $values = array_values($array);

// echo "<pre>";
// var_dump($keys);
// echo "</pre>";

// echo "<pre>";
// var_dump($values);
// echo "</pre>";


//  *3*
// $persons=[
//     ['ali', 20 ,'male'],
//     ['aya' , 20, 'female'],
//     ['aila', 20 ,'female']
// ];

// $persons[0][]='single';
// $persons[]=50;

// echo "<pre>";
// var_dump($persons);
// echo "</pre>";


?>
<!-- <h1 style="color:<?php echo $color ?>;">Home</h1> 
?> -->


<?php
// Loop :
// foreach hight level function لحالها بتاخد ارراي و بتعطي الندكس و كاونتر تلقائي 
// as == nameing تسمية القيم الاولى من الارراي هنا سماها فاليو  
// foreach only print without condition 

// for(init,condition,counter){action}

$array =['aya', 'ali', 'ahmed' , 5];
// for($i = 0 ; $i <= count($array)-1 ; $i++){
//     echo $array[$i].'<br>';
// }

// $i = 0 ;
// while($i <count($array)){
//     echo $array[$i].'<br>';
//     $i++;
// }

// $i = 0;
// do{
//     echo $array[$i].'<br>';
//     $i++;
// }while($i <count($array));

// foreach($array as $value){
//     echo $value.'<br>';
// }

// $x = 10;
// $y = 5 ;
// $x++ + $y++ - $x++ + ++$y * 2 ;
// و هنا انا ايوش حليته ...

// - Recursion == هو عبارة عن عمل فورلووب بدون استخدام الفور
$val = 5 ;

// function fact($val){
//     $res = 1 ;
//     for($i = 1 ; $i <= $val ; $i++){
//         $res *= $i ;

//     }
//     echo $res ;
// }
//  fact($val);

// function fact($val){
//     $res = 1 ;
//     if($val >= 1){
//         $res = $val * fact($val - 1 ) ;
//         return $res ;
//     }else{
//         return 1 ;
// }return $res;
// }
// echo fact(4);

// global variable :
// 1- GLOBAL يعرض جميييع متغيرات النظام 
// 2- SERVER ارجاع معلومات الخادم الحالي  $_SERVER
// 3- ENV ترجع معلومات الجهاز الخاص فيا 
// 4- FILE ترجع الملفات المرفقة بالفورم لو كان عندي فورم 
// 5- REQUEST هي الريكوست بأنواعه 
// 6- POST == $_POST
// 7- GET == $_GIT 
// 8- SESSION تخزن بالمتصفح عند عدم وجود مكان لتخزين البيانات (داتا بيز)
// 9- COOKIES تخزن المعلومات على الجهاز 

$x = 5 ;
var_dump($GLOBALS);
var_dump($GLOBALS['x']);
var_dump($_SERVER);
var_dump($_ENV);

echo $_ENV;