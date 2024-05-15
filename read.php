<?php 
  require "data.php";
  require "function.php";
  $title = "Read";
  $book = filterBooks($books,false);
  require "template.php";