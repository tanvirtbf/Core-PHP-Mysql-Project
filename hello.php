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
  $name = "Tanvir";
  $age = 25;
  $result = sprintf("My name is : %s and My age is : %d ",$name,$age);
  echo $result;
  
  ?>