<?php

require_once '../config/connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE `products`.`id` = '$id'";
$result = $connect->query($sql);

header('Location: ../index.php');