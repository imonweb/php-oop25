<?php
  
class Product {

  // properties = variable
  // static public $price = 2;
  private $price = 2;
  public $color = "green";
  private $total = 0;

  // public private protected static

  // method - function 
  public function calculate_total() {
    $this->total = 10 * 20;
    return $this->total;
  }

  public function generate_id(){
    return rand(0,9999);
  }

  protected function read(){
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
// echo $book->total();