<?php
require_once 'config/connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    th, td {
      padding: 10px;
    }

    th {
      background: #606060;
      color: #fff;
    }

    td {
      background: #b5b5b5;
    }
  </style>
  <title>Products</title>
</head>
<body>
  <table>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Price</th>
    </tr>
    <?php
    $sql = "SELECT * FROM products";
    $result = $connect -> query($sql);
    foreach($result as $product):
      ?>
      <tr>
        <td><?=$product[0]?></td>
        <td><?=$product[1]?></td>
        <td><?=$product[3]?></td>
        <td><?=$product[2]?></td>
        <td><a href="product.php?id=<?=$product[0]?>">View</a></td>
        <td><a href="update.php?id=<?=$product[0]?>">Update</a></td>
        <td><a style="color:red" href="vendor/delete.php?id=<?=$product[0]?>">Delite</a></td>
      </tr>
    <?php endforeach?>
  </table>
  <h3>Новый товар</h3>
  <form action="vendor/create.php" method="POST">
    <p>Заголовок</p>
    <input type="text" name="title">
    <p>Описание</p>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <p>Цена</p>
    <input type="number" name="price"><br><br>
    <input type="submit">
  </form>
</body>
</html>