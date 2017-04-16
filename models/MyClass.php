<?php

namespace app\models;

class MyClass
{
  public $prop1 = "Sou um propriedade da classe!";
  
  public static $prop3 = "Eu sou static";
  
  private $prop2; 
  
  public function __construct($arg1)
  {
	  $this->prop2 = $arg1;
  }
  
  public function getProp()
  {
	  return $this->prop1;
  }
  
  public function getProp2()
  {
	  return $this->prop2;
  }
  
  public function setProp($var)
  {
	  $this->prop1 = $var;
  }
}