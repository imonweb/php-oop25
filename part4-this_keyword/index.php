<?php
  
class Product {

  // properties = variable
  // static public $price = 2;
  public $price = 2;
  public $color = "green";
  public $total = 0;

  // method - function 
  function calculate_total() {
    $this->total = 10 * 20;
    return $this->total;
  }

  function generate_id(){
    return rand(0,9999);
  }

  function read(){
    $this->calculate_total();
    return $this->total;
  }
}

// $number = Product::$price;
// echo $number;

$book = new Product();

$book->calculate_total();
// echo $book->calculate_total();
echo $book->read();