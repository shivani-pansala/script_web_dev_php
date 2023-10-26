<?php

$color=array("red", "green", "blue", "black", "white");
$fruits=array("apple","blue","mango","black","pear");
print_r($color);
 echo "<br>";
print_r($fruits);
echo "<br>";
$diffrences=array_diff($fruits,$color);
print_r($diffrences);
?>