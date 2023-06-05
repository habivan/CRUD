<?php
require_once '../config/connect.php';

$id = htmlspecialchars($_POST['id']);
$title = htmlspecialchars($_POST['title']);
$description =htmlspecialchars( $_POST['description']);
$price = htmlspecialchars($_POST['price']);

$sql = "INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES (NULL, :title, :price, :description)";
$chec = $connect->prepare($sql);

$chec -> execute(['title'=>$title, 'price'=>$price, 'description'=>$description]);

header('Location: ../index.php');