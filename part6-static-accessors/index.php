<?php
  
class Product {
 
  private $price = 2;
  public $color = "green";
  public static $total = 0;

  // public private protected static

  // method - function 
  public function calculate_total() {
    self::$total = 10 * 20;
  }

  public function generate_id(){
    return rand(0,9999);
  }

  public function read(){
    self::calculate_total();
    return self::$total;
  }
}

$book = new Product();
  
// echo Product::$total;
echo $book::$total;
echo $book->calculate_total();
// echo Product::$total;
echo '<br />';
 
$book2 = new Product();

echo $book2::$total;