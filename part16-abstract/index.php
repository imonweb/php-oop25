<?php 

abstract class Database 
{
  protected $var = 2;

  function __construct()
  {
    echo "constructing";
  }

  abstract function show();

}

class Product extends Database
{
  function show(){
    echo 'some text';
  }
}

$a = new Product();
$a->show();