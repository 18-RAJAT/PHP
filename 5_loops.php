<?php

//for loop

// for($x=0;$x<=10;++$x)
// {
//   // echo $x;
//   echo 'Number '.$x.'<br>';
// }



//while

// $a=1;
// while($a<=15)
// {
//   echo 'Number'.$a.'<br>';
//   $a=$a+1;
// }


//Do while loop

// $x=1;
// do{
//   echo 'Number->'.$x.'<br>';
//   $x=$x+1;
// }
// while($x<=10);



$post=['first','second','third'];
// for($i=0;$i<count($post);$i++)
// {
//    echo $post[$i].'<br>';
// }


//For each 

// foreach($post as $posts)
// {
//   echo $posts.'<br>';
// }

//getting index
// foreach($post as $index => $posts)
// {
//   echo $index.'->'.$posts.'<br>';
// }


$person=[
  'first name'=>'james',
  'last name'=>'bond',
  'age'=>'40',
  'city'=>'London',
  'email'=>'james121@gmail.com',
];

foreach($person as $key => $value)
{
  echo $key.'-'.$value.'<br>';
}