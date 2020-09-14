<html>
 <head>
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php 
  echo '<p>Привет, мир!</p>'; 

  echo '<p></p>';
  echo '<p>Примеры использования массива:</p>';  

  echo '<p>   - простой массив</p>';
  $array2 = [
    "mon" => "key",
    "bana" => "na",
  ];
  var_dump($array2); 

  echo '<p>   - индексированные массивы без ключа</p>';
  $array1 = array("foo", "bar", "hallo", "world");
  var_dump($array1);
 ?>
 </body>
</html>