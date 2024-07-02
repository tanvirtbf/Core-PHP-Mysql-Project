<?php 
  // $a=10;
  // $b=20;
  // $c = $a + $b;
  // echo $c;

  //scope
  //1. local scope
  //2. global scope
  //3. super global scope
  // function myFun1(){
  //   global $a;
  //   echo $a;
  // }
  // myFun1();

  //constant variable

  //define const
  // define('BATCH','3');
  // define('SITE_NAME', 'http://tanvir.app');
  
  //Access const
  // echo BATCH;
  // echo SITE_NAME;

  //printf() = formatting + output print
  // $name = "Tanvir Ahmed";
  // $age = 25;
  // printf("Name : %s, Age : %d", $name,$age);

  //placeholder(php) or format spacifier(C)
  // %s = string
  // %d = decimal / int
  // %f = floating
  // %x = lowercase hexadecimal
  // %X = uppercase hexadecimal

  //sprintf() = only formatting, not for output
  // $name = "Tanvir";
  // $age = 25;
  // $result = sprintf("My name is : %s and My age is : %d ",$name,$age);
  // echo $result;

  // Ternary Operators
  // almost same concept with Javascript 

  // Function argument, parameter with Type Hinting
  // function sum(int $a,float $b, int $c){
  //   $nam1 = $a+$c;
  //   $nam2 = $b + $nam1;
  //   echo $nam2;
  // }
  // sum(2,3.0,4);

  //Multiple Type Hinting..
  // function mySelf(string $name, int|string $age, string $des = "Complete"){
  //   printf("My Name is %s. My age is %d and %s",$name,$age,$des);
  // }
  // mySelf("Tanvir Ahmed",23,"It's Complete");

  // Nullable Type Hinting
  //strict mode on
  // declare(strict_types=1);
  // function hello(?string $name){
  //   echo $name;
  // }
  // hello(null);
  // hello(123);

  //Variadic Functions
  // function sum(...$name){
  //   for($i = 0; $i<=5; $i++){
  //     echo $name[$i];
  //   };
  // }
  // sum(1,2,3,4,5,6);

  // Anonymous Function -> || IIF(in js)
  (function(){
    echo "I am not a function name";
  })();


  
?>