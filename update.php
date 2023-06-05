<?php
require_once 'config/connect.php';

$product_id = $_GET['id'];
$product = "SELECT * FROM products WHERE id = '$product_id'";
$result = $connect ->query($product);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h3>Изменение товара</h3>
  <form action="vendor/update.php" method="POST">
    <?php foreach($result as $product):?>
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <p>Заголовок</p>
    <input type="text" name="title" value="<?=$product['title']?>">
    <p>Описание</p>
    <textarea name="description" id="" cols="30" rows="10"><?=$product['description']?></textarea>
    <p>Цена</p>
    <input type="number" name="price" value="<?=$product['price']?>"><br><br>
    <input type="submit">
    <?php endforeach ?>
  </form>
</body>
</html>