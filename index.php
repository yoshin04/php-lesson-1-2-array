<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>php-lesson-1-2</title>
</head>
<body>
  <form method="post">
    <input type="text" name="element">
    <input type="submit" name="submit" value="検索">
  </form>
  <?php 
    $fruits = ['apple', 'orange', 'strawberry'];
    if($_POST['submit']) {
      $element = $_POST['element'];
      if(in_array($element, $fruits)) {
        echo  $element . "は、配列fruitsの中に存在してます。";
      } else {
        echo $element . "は、配列fruitsの中に存在していません。";
      }
    }
  ?>
</body>
</html>