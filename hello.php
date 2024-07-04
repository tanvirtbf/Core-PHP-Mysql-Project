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
  // (function(){
  //   echo "I am not a function name";
  // })();

  //Anonymous function assign to variable
  // $hitrun=function($name){
  //   echo $name;
  // };
  // $hitrun("Hello!!");

  // Basic Return Type 
  // ekta function ja return kore seta tar soman hoye jay;
  // $addTwo=function(){
  //   return 10;
  // };
  // $sum=$addTwo()+10;
  // echo $sum;

  //Function Return Type
  // function addTwo():int{
  //   return 10;
  // };
  // $add=addTwo();
  // echo $add;

  // Union Return Type (Multiple Return Type)
  // function addTwo():int|float|string|bool{
  //   return 10;
  // };
  // $add=addTwo();
  // echo $add;

  // Object Oriented Programming
  
  // Class Human{
  //   public $name;
  //   function sayHi(){
  //     echo "Salam\n";
  //   }
  //   function getName(){
  //     echo "My name is {$this->name}";
  //   }
  // }
  // class Cat{
  //   function sayHi(){
  //     echo "Meow\n";
  //   }
  // }
  // class Dog{
  //   function sayHi(){
  //     echo "Woof\n";
  //   }
  // }

  // $h1 = new Human();
  // $c1 = new Cat();
  // $d1 = new Dog();
  // $h1->name = "Tanvir";

  // $h1->sayHi();
  // $c1->sayHi();
  // $h1->getName();
  // echo $h1->name;

  // class Human{
  //   public $name;
  //   public function __construct($name){
  //     $this->name = $name;
  //   }
  //   function sayName(){
  //     echo "My name is {$this->name}\n";
  //   }
  // }
  // class Dog{
  //   public $name2;
  //   function sayName(){
  //     echo "My name is {$this->name2}";
  //   }
  // }
  // $tanvir=new Human("Tanvir",25);
  // $d1=new Dog();
  // $sadia=new Human("Sadia",15);

  // $tanvir->sayName();
  // $sadia->sayName();

  //Funding mini project
  // class Fund{
  //   private $fund;
  //   public function __construct($initialFund=0){
  //     $this->fund = $initialFund;
  //   }
  //   public function addFund($money){
  //     $this->fund += $money;
  //   }
  //   public function deductFund($money){
  //     $this->fund -= $money;
  //   }
  //   public function getTotalFund(){
  //     echo "Total Fund is {$this->fund}\n";
  //   }
  // }

  // $ourFund = new Fund(100);
  // $ourFund->addFund(12);
  // $ourFund->deductFund(5);
  // $ourFund->getTotalFund();

  // Project : Hexadecimal to decimal(RGB) 
  // class RGB{
  //   private $color;
  //   private $red;
  //   private $green;
  //   private $blue;

  //   function __construct($colorCode=''){
  //     $this->color = ltrim($colorCode,"#");
  //     $this->parseColor();
  //   }
  //   function getColor(){
  //     return $this->color;
  //   }
  //   function getRGBColor(){
  //     return array($this->red,$this->green,$this->blue);
  //   }
  //   function readRGBColor(){
  //     echo "Red : {$this->red}\nGreen : {$this->green}\nBlue : {$this->blue}\n";
  //   }
  //   function setColor($colorCode){
  //     $this->color = ltrim($colorCode,"#");
  //     $this->parseColor();
  //   }
  //   private function parseColor(){
  //     if($this->color){
  //       list($this->red,$this->green,$this->blue) = sscanf($this->color,'%02x%02x%02x');
  //       // echo $this->red;
  //       // echo $this->blue;
  //       // echo $this->green;
  //     }else{
  //       list($this->red,$this->green,$this->blue) = array(0,0,0);
  //     }
  //   }
  //   function getRed(){
  //     return $this->red;
  //   }
  //   function getGreen(){
  //     return $this->green;
  //   }
  //   function getBlue(){
  //     return $this->blue;
  //   }
  // }
  // $myColor = new RGB("#ffef27");
  // $myColor->setColor("#abbbcc");
  // $myColor->readRGBColor();

  // Alone this project
  // class RGB{
  //   private $color;
  //   private $red;
  //   private $green;
  //   private $blue;
  //   public function __construct($colorCode=''){
  //     $this->color = ltrim($colorCode,"#");
  //     $this->colorPerse();
  //   }
  //   function getColorCode(){
  //     echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}\n";
  //   }
  //   function colorPerse(){
  //     if($this->color){
  //       list($this->red,$this->green,$this->blue) = sscanf($this->color,'%02x%02x%02x');
  //       $this->getColorCode();
  //     }else{
  //       list($this->red,$this->green,$this->blue) = array(0,0,0);
  //     }
  //   }
  // }
  // $genColor = new RGB("#ffaf0f");

  // Array 

  // Array creation 
  // First Approach
  // $arr1 = ['tanvir','sadia','maymuna'];
  // // Second Approach
  // $arr2 = array('Tanvir','Sadia','Maymuna');

  // for($i = 0; $i<count($arr1); $i++){
  //   echo $arr1[$i] . "\n";
  // }
  // foreach($arr1 as $hello){
  //   echo "{$hello} \n";
  // }

  // OOP AGAIN
  // class
  // class car{
  //   public $color="Red\n";
  //   // Constructor
  //   // 1. He can take parameter
  //   // 2. He exucate automatically
  //   // 3. He can't return anything

  //   // Properties value manupulation using constructor parameter
  //   public function __construct($newColor="Blue"){
  //     $this->color = $newColor;
  //   }
  //   function drive(){
  //     echo "I am driving\n";
  //   }
  // } 
  // //Object
  // $carObj=new car("Green");
  // echo $carObj->color;
  // $carObj->drive();

  // Inheritance (parent to child to next child to next next child)
  // 1. extends
  // 2. override
  // 3. parent keyword
  // 4. abstract
  
  abstract class Father{
    public $name = "Tanvir Ahmed\n";
    public function print100($count=10){
      for($i=0;$i<=100;$i+=$count){
        echo "{$i}\n";
      }
    }
  }
  class Child extends Father{
    public $name2 = "Sadia Ahmed\n";
    public function demo(){
      parent::print100();
    }
  }
  $child=new Child();
  $child->print100(33.33);



























?>