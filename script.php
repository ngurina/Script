 <!DOCTYPE html>
 <html>
  <head>
  <meta charset="utf-8">
  <title>Скрипт</title>
 </head>
 <body> 
  <form method="post" action>
    <div>
      <label for="name">Переменная</label>
      <input type="text" name="name" required>
    </div>
     <div>
      <label for="value">Значение</label>
      <input type="text" name="value" required>
    </div>
    <button type="submit">Отправить</button> 
  </form> 
<!--Скрипт-->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name= isset($_POST['name']) ? $_POST['name'] : ' ';
  $value= isset($_POST["value"]) ? $_POST["value"] : " ";
  $response[$name] = $value;
      echo "<pre>";
      echo "Первый способ вывода с использованием цикла"; 
      foreach ($response as $k => $v) {
        echo "<pre>";
        echo "$k : $v";
    } 
    echo "<pre>";
    echo "Второй способ вывода с использованием json";
    echo "<pre>";
    echo json_encode ($response);
} 
?>
</body>
</html>

