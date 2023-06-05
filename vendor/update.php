<?php
require_once '../config/connect.php';

$id = $_POST['id'];
$title = htmlspecialchars( $_POST['title']);
$description = htmlspecialchars( $_POST['description']);
$price = htmlspecialchars( $_POST['price']);



$sql = "UPDATE `products` SET `title` = :title, `price` = :price, `description` = :description
WHERE `products`.`id` = '$id'";
$chec = $connect->prepare($sql);

$chec -> execute(['title'=>$title, 'price'=>$price, 'description'=>$description]);

header('Location: ../index.php');