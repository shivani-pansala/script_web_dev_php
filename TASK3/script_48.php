<?php

  function add($value,$value1)
  {
    return ($value.'-'.$value1);
  }
  $arrayy= array("hello","every","set","hope");
  echo "Default array";
  print_r($arrayy);
  echo "<br>";
  print_r(array_reduce($arrayy,"add","newString"));

?>