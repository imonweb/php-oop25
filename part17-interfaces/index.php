<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      background-color: #333;
      color: #eee;
      font-family: 'Poppins',serif;
      margin: 2rem;
    }
  </style>
  <title>PHP</title>
</head>
<body>
  
</body>
</html>

<?php 

interface Database {
  function read();
  function write();
  function update();
  
}

interface Product {
   
}

 
class Andriod implements Database
{
  function read(){
    return $rows;
  }
  function write(){

  }
  function update(){

  }
}

 
class iOS implements Database
{
  function read(){
    
  }
  function write(){

  }
  function update(){

  }
}

echo 'hello';