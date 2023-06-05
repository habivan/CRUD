<?php
require_once 'config/connect.php';

$product_id = $_GET['id'];
// $product = mysqli_query($connect, "SELECT * FROM products WHERE id = '$product_id'");
// $product = mysqli_fetch_assoc($product);

$sql = "SELECT * FROM products WHERE id = '$product_id'";
$chec = $connect->query($sql);

// $comments = mysqli_query($connect, "SELECT * FROM comments WHERE '$product_id' = '$product_id'");
// $comments = mysqli_fetch_all($comments);
$sql2 = "SELECT * FROM comments WHERE '$product_id' = '$product_id'";
$chec2 = $connect->query($sql2);


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
  <a href="index.php">назад</a>
  <?php foreach($chec as $product): ?>
    <h2>Нзвание: <?=$product['title']?></h2>
    <h4>Цена: <?=$product['price']?></h4>
    <p>Описание: <?=$product['description']?></p>
  <?php endforeach ?>
  <hr>
    <form action="vendor/create_commit.php" method="post">
      <input type="hidden" name="id" value="<?=$product['id']?>">
      <textarea name="body" id="" cols="30" rows="10"></textarea>
      <button type="submit">Отправить</button>
    </form>
  <hr>

  <h3>Кментарии</h3>
  <ul>
    <?php foreach($chec2 as $com):?>
    <li><?=$com[2]?></li>
    <?php endforeach?>
  </ul>
</body>
</html>