<?php

// Array Create in 2 ways
// 1. [] 
// 2. array()

// $arr1 = ['Tanvir','Sadia','Maymuna'];
// $arr2 = array('Humaira','Ayesha','Khadija');

// echo $arr1[2];
// echo $arr2[1];


//For Loop with Array 
// for($i=0;$i<count($arr1);$i++){
//   echo $arr1[$i];
// }

//Foreach Loop with Array
// foreach($arr2 as $item){
//   echo $item;
// }

// $assArr = [
//   'Name' => 'Tanvir Ahmed',
//   'Wife' => 'Sadia Ahmed',
//   'Age' => 15,
//   'Class' => 'BSC 3rd year',
//   'Address' => 'Dhaka Sonir Akhra'
// ];
// print_r($assArr);

// foreach($assArr as $key=>$value){
//   echo "$key : $value <br />"; 
// }

// MultiDimensional Array
// $assArr = [
//   ['Name'=>'Tanvir','Age'=>25,'Address'=>'Dhaka'],
//   ['Name'=>'Sadia','Age'=>15,'Address'=>'Tiara'],
//   ['Name'=>'Maymuna','Age'=>20,'Address'=>'Brahmonbaria'],
// ];

// foreach($assArr as $child){
//   foreach($child as $key=>$value){
//     echo "$key : $value <br />";
//   }
//   echo "<br />";
// };

// Array built in Function 

//1. array() 
// $arr = array(1, 2, 3, 4, 5);
// echo $arr[2];

//2. print_r()
//print_r($arr); // print array with all definition

//3. array_values()
// $arr = ['firstName'=>'Tanvir','lastName'=>'Ahmed','Age'=>25];
// $value = array_values($arr);
// print_r($value);

//4. array_keys()
// $arr = ['firstName'=>'Tanvir','lastName'=>'Ahmed','Age'=>25];
// $value = array_keys($arr);
// print_r($value);

//5. array_combine()
// $keys = ['firstName','lastName','age'];
// $values = ['Tanvir','Ahmed',25];
// $combine = array_combine($keys,$values);
// print_r($combine);

//6. array_fill()
// $fillArr = array_fill(0,5,"Tanvir");
// print_r($fillArr);

//7. array_push()
// $pushArr = ['tanvir','sadia'];
// print_r($pushArr);
// array_push($pushArr,'maymuna','humaira','ayesha');
// print_r($pushArr);

//8. array_pop()
// $popArr = ['tanvir','sadia','maymuna','humaira'];
// array_pop($popArr);
// array_pop($popArr);
// print_r($popArr);

//9. array_shift()
// $shiftArr = ['tanvir','sadia','maymuna','humaira'];
// array_shift($shiftArr);
// print_r($shiftArr);

//10. array_unshift()
// $unshiftArr = ['tanvir','sadia'];
// array_unshift($unshiftArr,'Humaira','Khadija');
// print_r($unshiftArr);

//11. array_slice()
// $sliceArr = ['a','b','c','d','e'];
// $newSliceArr = array_slice($sliceArr,1,3);
// print_r($newSliceArr);

//12. array_splice()
// $spliceArr = ['a','b','c','d','e'];
// array_splice($spliceArr,1,2,['tanvir','sadia','maymuna']);
// print_r($spliceArr);

//13. count()
// $countArr = [1,2,3,4,5];
// echo count($countArr);

//14. sizeof()
// $sizeofArr = [1,2,3,4,5];
// echo sizeof($sizeofArr);

//15. array_sum()
// $sumArr = [1,2,3,4,5];
// $newArr = array_sum($sumArr);
// echo $newArr;

//16. array_product()
// $productArr = [1,2,3,4,5];
// $newArr = array_product($productArr);
// echo $newArr;

//17. in_array()
$inArr = ['tanvir','sadia','maymuna','humaira'];
$check = in_array('sadia',$inArr);
echo $check;

//18. is_array()
$isArr = 'hello world';
$check = is_array($isArr);
echo $check; // Ans : false

?>