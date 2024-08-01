<?php 

$str = 'hello world';
echo $str[1]; 

echo strtoupper($str); // HELLO WORLD
echo strtolower($str); // hello world

echo ucwords($str); // Hello World // Title case or Capitalized
echo ucfirst($str); // Hello world // sentence er first word er first character uppercase hobe

// various string case
// 1. Title Case  = Hello World Tanvir
// 2. snake case = hello_world_tanivr
// 3. kebab case = hello-world-tanvir
// 4. camel case = helloWorldTanvir
// 5. pascel case = HelloWorldTanvir
 
?>