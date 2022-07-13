<?php
/*----variable rules-----*/
/*
   variable must start with a letter or an underscore character.

   variable can't start with a number.

   variable can contain letters, numbers, and underscores.

   variables are case-sensitive ($name and $NAME are two different variables).

*/

$name='john';
$age=30;
$boolean=true;
$float_value=2.3314;


echo $name;
var_dump($name);
var_dump($float_value);


//printing.
echo $name . 'is' . $age .'years old';
echo "${name} is ${age} years old";


$res='5'+'6';
echo $res;
var_dump($res);


echo 10-5;
echo 5*6;
echo 10/6;
echo 6%5;


//these are constants and can't be changed after declaration.
define('Host','localhost');
define('DB_NAME','dev_db');

// echo Host;