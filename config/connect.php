<?php
try{
  $connect = new PDO('mysql:host=localhost;dbname=CRUD; charset=utf8', 'root', '');
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo"Подключено";
} catch (Exception $e) {
  echo $e->getMessage();
  die('help');
}


// $connect = mysqli_connect('localhost', 'root', '', 'CRUD');

// if(!$connect){
//   die('help') ;
// }

