<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    /* * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    } */
    body {
      background-color: #333;
      color: #eee;
      font-family: 'Poppins',serif;
      margin: 2rem;
    }
  </style>
  <title>PHP</title>
</head>
<body class="bg-dark text-light">

<main>
  

  <div class="px-2 py-2 my-5 text-center">
     
    <h1 class="display-5 fw-bold">PHP OOP</h1>
    <div class="col-lg-6 mx-auto">
      <h2 class="fw-bold lead mb-4">Trait </h2>
     
    </div>

    <div class="b-example-divider border-bottom"></div>


  </div>

  

  <div class="px-4 pt-5 my-5 text-center">
    
<!--========= Code start ==========-->

<?php 
include 'book.php';

class book2 {
  
}

$a = new App\School\book();
echo '<br>';
use App\Cafe\book;
$b = new book();

 
// use App\Cafe\{book,book3};
// $b = new book();
// $b = new book3();
?>











<!--========= Code end ==========-->
   
  </div>

  </main>


 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

