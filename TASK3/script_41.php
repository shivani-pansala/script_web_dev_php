<?php

$color = array("green", "yellow", "blue","pink");
$fruits = array("banana", "orange", "grape","apple", "pink","green");
print_r($color);
echo "<br>";
print_r($fruits);
echo "<br>";

$intersect=array_intersect($fruits,$color);
print_r($intersect);
?>