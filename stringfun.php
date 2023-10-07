<?php
 $name="Ved is a good boy";
 echo $name;
 echo "<br>";

 echo "The length of" . "the string is ". strlen($name);
 echo "<br>";
 echo str_word_count($name);
 echo "<br>";
 echo strrev($name);
 echo "<br>";
 echo strpos($name,'Ved');
 echo "<br>";
 echo str_replace('Ved','Mohan',$name);
 echo "<br>";
 echo str_repeat($name,3);
 echo "<br>";
 echo "<pre>";
 echo rtrim("   this is a boy  ");
 echo "<br>";
 echo ltrim("   this is a girl  ");
 echo "</pre>";





?>