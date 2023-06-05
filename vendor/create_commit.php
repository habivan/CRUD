<?php
require_once '../config/connect.php';

$id = $_POST['id'];
$body = htmlspecialchars($_POST['body']);

// mysqli_query($connect, "INSERT INTO `comments` (`id`, `product_id`, `body`) VALUES (NULL, '$id', '$body')");

$sql = "INSERT INTO `comments` (`id`, `product_id`, `body`) VALUES (NULL, '$id', '$body')";
$chec = $connect->prepare($sql);

$chec -> execute(['id'=>$id, 'body'=>$body]);


header('Location: ../product.php?id='.$id);