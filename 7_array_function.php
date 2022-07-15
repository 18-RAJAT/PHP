<?php

$fruits=['apple','mango','orange'];

//get length
// echo count($fruits);//3

//search array
// var_dump(in_array('mango',$fruits)); //bool(true) 

//Add to array

//output
// [
//     {
//     0: "apple",
//     1: "mango",
//     2: "orange",
//     3: "grapes"
//     }
//     ]

$fruits[]='grapes';

// [
//     {
//     0: "orange",
//     1: "apple",
//     2: "mango",
//     3: "orange",
//     4: "grapes",
//     5: "new",
//     6: "yes"
//     }
//     ]

// array_push($fruits,'new','yes');
// array_unshift($fruits,'orange');

// print_r($fruits);


//split into 2 chunks
// $chunked=array_chunk($fruits,2);

// [
//     {
//     0: {
//     0: "apple",
//     1: "mango"
//     },
//     1: {
//     0: "orange",
//     1: "grapes"
//     }
//     }
//     ]

// print_r($chunked);



$ar1=[1,2,3,4,5];
$ar2=[6,7,8,9,10];

$ar3=array_merge($ar1,$ar2);
// [
//     {
//     0: "1",
//     1: "2",
//     2: "3",
//     3: "4",
//     4: "5",
//     5: "6",
//     6: "7",
//     7: "8",
//     8: "9",
//     9: "10"
//     }
//     ]

print_r($ar3);
//spread operator
$ar4[]=[...$ar1];
// {
    //[
    // 0: {
    // 0: "1",
    // 1: "2",
    // 2: "3",
    // 3: "4",
    // 4: "5"
    // }
    // }
    // ]
print_r($ar4);


$ar5[]=[...$ar1,...$ar2];

// {
//     0: {
//     0: "1",
//     1: "2",
//     2: "3",
//     3: "4",
//     4: "5",
//     5: "6",
//     6: "7",
//     7: "8",
//     8: "9",
//     9: "10"
//     }
//     }

print_r($ar5);

//combine array

$a=['a','b','c','d','e'];
$b=['f','g','h','i','j'];

$c=array_combine($a,$b);
// {
//     a: "f",
//     b: "g",
//     c: "h",
//     d: "i",
//     e: "j"
//     }
print_r($c);

//flipped arrays

$flip=array_flip($c);
// {
//     f: "a",
//     g: "b",
//     h: "c",
//     i: "d",
//     j: "e"
//     }
print_r($flip);


//generate random numbers
// $numbers=rand(1,20);
// print_r($numbers);


$nums=range(1,15);
// {
//     0: "1",
//     1: "2",
//     2: "3",
//     3: "4",
//     4: "5",
//     5: "6",
//     6: "7",
//     7: "8",
//     8: "9",
//     9: "10",
//     10: "11",
//     11: "12",
//     12: "13",
//     13: "14",
//     14: "15"
//     }
print_r($nums);


$newNumbers=array_map(function($nums)
{
    return "Number${nums}";
},$nums);

// {
//     0: "Number1",
//     1: "Number2",
//     2: "Number3",
//     3: "Number4",
//     4: "Number5",
//     5: "Number6",
//     6: "Number7",
//     7: "Number8",
//     8: "Number9",
//     9: "Number10",
//     10: "Number11",
//     11: "Number12",
//     12: "Number13",
//     13: "Number14",
//     14: "Number15"
//     }

print_r($newNumbers);


//Filter

$lessThenTen=array_filter($nums,fn($nums)=>
    $nums<=10);
    // {
    //     0: "1",
    //     1: "2",
    //     2: "3",
    //     3: "4",
    //     4: "5",
    //     5: "6",
    //     6: "7",
    //     7: "8",
    //     8: "9",
    //     9: "10"
    //     }
    print_r($lessThenTen);

$sum=array_reduce($nums,fn($carry,$nums)=>$carry+$nums);
// "int(120)"
var_dump($sum);

// "120"
print_r($sum);