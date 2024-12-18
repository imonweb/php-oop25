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
