<?php
/* php Datatypes 
1. String
2. Int
3. Float
4. Boolean
5. Object
6. Array
7. Null
*/
//String (Sequence of characters)
$name="harry";
//$name='rohan';
echo "$name<br>";

//Integer (Non-decimal Numbers)
$income=3783;
echo "$income<br>";

//Float (Decimal point number)
$income=2939.342;
echo "$income<br>";

//Boolean (Can either be true or false)
$xyz=true;
$abc=false;
echo var_dump($xyz);
echo "<br>";
echo var_dump($abc);

//Array (used to store multiple values in a single variable)
$friends=array("rahul","mohan","sohan","rohan");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[3];
echo "<br>";

//Null
$name=null;
echo var_dump($name);

?>