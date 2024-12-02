<?php 

/*
================================================
   Classes & Intantiation 
================================================
*/

// bluepritn / mold / pattern / factory for objects
class Product {

  // properties = variable
  public $price = 2;
  public $color = "green";
  public $total = 0;

  // method - function 
  function calculate_total() {
    echo $this->total;
  }
}

$book = new Product(); // instantiation
// echo "book $" . $book->price;
// $book->price = 10;
$book->calculate_total();

echo "<br>";

$phone = new Product(); // instantiation
echo "phone $" . $phone->price;
