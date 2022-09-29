<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    /*
   //variable 
    $num = 50;
    $num2 = 20;
    $result = $num+$num2;
    echo $num + $num2 ."<br>";
$Age = 50;
$Age1 = 40;
$Age2 = 30;
$Age3 = 20;
echo $Age + $Age1."<br>" ;
echo ($Age + $Age1)."<br>" ;
 $result1 =  print $Age + $Age1."<br>" ;
print ($Age + $Age1)."<br>";
echo $result1;
*/


/*
//Type

$names = 'Sujon';
$names2 = "I love you";
$number = 30;
$number2 = 50.5;
$bol = true;
$people = array('sujon', 'smita', 20.5, "kuk");
$people1 = ['sujon', 'smita', 20.5, "kuk"];
var_dump($people1);

// echo $people; 

*/



/*

// object
class phone  {
    var $model;
    function phoneModel ($number){
        global $model;
        $model = $number;
        echo "This is phone $model <br>";
    }
}

$apple = new phone;
$apple -> phoneModel("apple 13");

$vivo = new phone;
$vivo -> phoneModel('Vivo y20')
*/

/*

// String 
 echo strlen('i love you');
 echo strrev('i love you');
 echo str_word_count('i love you');


// echo strpos("i eat pizza", "eat");

$food = str_replace("pizza","Rice","I eat pizza");
echo($food);
*/

/*
// number

echo (max(66,20,90,50,30,20,21,65,78,15));
echo (min(66,20,90,50,30,20,21,65,78,15));
echo(round(pi()));

echo(sqrt(68));
echo(rand(1,30))
  */
  /*  
//  constants 

$x = 10;
$y = 20;
$z = 30;

define('A', 30);
define("B",30);
define('cars', [
    'BMW',
    'toyato',
    'tazla',
    'honda'
]);

echo (cars[1]."<br>");
  
function host(){
   echo (cars[1]); 
}

host();
*/


/*
// condition

$x = 20;
$y = 20;

if ($x===$y) {
    echo 'same'.'<br>';
}else echo 'not same'.'<br>';

$date = date('H','M','Y'); 
echo $date;
*/
/*
// Loop

$num = [54,4,5,8,2,3,9,4,1];
for ($i=0; $i <= 100; $i+=5) { 
   echo 'This is number '.$i."<br>";
};
*/

// Time date
date_default_timezone_set("Asia/Dhaka");
echo "Today " .date('d/m/y') ."<br>";
echo "Today " .date('h:m:sa');

    ?>
</body>
</html>