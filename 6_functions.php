<?php

//global variable
// $x=10;

// function user_register()
// {
//     global $x;
//     echo $x . '<br>';
//     echo 'User registered';
// }
// user_register();


// function register($email)
// {
//     echo $email.'registered';
// }

// register('john ');




// function Sum($a,$b)
// {
//     // $c=$a+$b;
//     return $a+$b;
// }

// $c=Sum(10,2);
// echo $c;



// function sum($a=1,$b=5)
// {
//     return $a+$b;
// }

// $number=sum();
// echo $number;



// function sum($a=4,$b=10){return $n1+$n2;}
// $number=sum();

$subtract=function($a,$b){return $a-$b;};
echo $subtract(10,5).'<br>';

$multiply=fn($a,$b)=>$a*$b;
echo $multiply(6,7);