<?php

//simple 2 ways to creating an array
$numbers=[1,11,2,22,3,33,4,44,5,55];
$names=array('john','joe','great');

print_r($numbers);
var_dump($names);


//Output print_r


// [
//     {
//     0: "1",
//     1: "11",
//     2: "2",
//     3: "22",
//     4: "3",
//     5: "33",
//     6: "4",
//     7: "44",
//     8: "5",
//     9: "55"
//     },


//Output var_dump


//     "array(3) {",
//     " [0]=&gt;",
//     " string(4) "john"",
//     " [1]=&gt;",
//     " string(3) "joe"",
//     " [2]=&gt;",
//     " string(5) "great"",
//     "}"
//     ]

//print specific value
echo $names[0];


//Associative array
$colors=[1=>'red',2=>'blue',4=>'green',7=>'yellow'];

// echo $colors[1];//o/p->red.

$hex=['red'=>'#f00','green'=>'#0f0','blue'=>'#00f'];

// echo $hex['green'];//o/p is color code of green #0f0.



$person=[
    'first_name'=>'Rajat',
    'last_name'=>'joshi',
    'mail'=>'rj12@gmail.com'
];

echo $person['first_name'];


//Multidimensional array


$info=[
    [
    'first_name'=>'fi',
    'last_name'=>'sc',
    'mail'=>'xys12@gmail.com'
    ],
[
    'first_name'=>'na',
    'last_name'=>'yaa',
    'mail'=>'rll12@gmail.com'
],
[
    'first_name'=>'abc',
    'last_name'=>'xyz',
    'mail'=>'abc12@gmail.com'
],
];

//access Multidimensional array
// echo $info[1]['mail'];  //Output "Rajatrll12@gmail.com"


//////////////////////////////////////
//get json format 
//////////////////////////////////////

var_dump(json_encode($info));
//output is json format

// "string(190) "[{"first_name":"fi","last_name":"sc","mail":"xys12@gmail.com"},{"first_name":"na","last_name":"yaa","mail":"rll12@gmail.com"},{"first_name":"abc","last_name":"xyz","mail":"abc12@gmail.com"}]""