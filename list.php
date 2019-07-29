<?php
    require_once('funciton.php');
    require_once('dbconnect.php');


    $stmt = $dbh->prepare('SELECT * FROM diary');
    $stmt->execute();
    $results = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/blog.css">
    <title>投稿一覧</title>
</head>
<div class="header"> Diary</div>

<body>
<br>
<h1>投稿一覧</h1>
  

<?php foreach ($results as $result): ?>
        <p><?php echo h($result['date']); ?></p>
        <p><?php echo h($result['title']); ?></p>
        <p><?php echo h($result['contents']); ?></p>
 <?php endforeach; ?>

 <button type="button" onclick ="location.href='index.php'">TOPに戻る</button>

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="footer"></div>

</html>