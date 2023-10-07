<?php
//Operators in Php.
/*
1. Arithematic Operators.
2. Assignment Operators.
3. Comparison Operators.
4. Logical Operators.
*/
//Arithematic Operators.
$x=54;
$y=6;
echo ($x+$y);
echo "<br>";
echo ($x-$y);
echo "<br>";
echo ($x/$y);
echo "<br>";
echo ($x%$y);
echo "<br>";
echo ($x*$y);
echo "<br>";
echo ($x**$y);

//Assignment Operators.
$a=$x;
echo "This is a value = ".$a;
echo "<br>";
echo ($x+=10);
echo "<br>";
echo ($x-=25);
echo "<br>";
echo ($x*=6);
echo "<br>";
echo ($x/=4);
echo "<br>";
echo ($x%=3);

//Comparison Operators.
$m=7;
$n=9;
echo var_dump($m==$n);echo "<br>";
echo var_dump($m>$n);echo "<br>";
echo var_dump($m<$n);echo "<br>";
echo var_dump($m<>$n);echo "<br>";
echo var_dump($m<=$n);echo "<br>";
echo var_dump($m>=$n);echo "<br>";

//Logical Operators.
$p=true;
$q=false;
echo var_dump($p && $q);echo "<br>"; //And operators
echo var_dump($p || $q);echo "<br>"; //Or operators
echo var_dump(!$p);echo "<br>"; //not operators




?>