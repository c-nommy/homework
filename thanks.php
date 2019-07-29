<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: index.php');
    }

    require_once('funciton.php');
    require_once('dbconnect.php');

    $date = $_POST['date'];
    $title = $_POST['title'];
    $contents = $_POST['contents'];

    $stmt = $dbh->prepare('INSERT INTO diary (date, title, contents) VALUES (?, ?, ?)');
    $stmt->execute([$date, $title, $contents]);
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/blog.css">
    <title>投稿確認</title>
</head>
<div class="header"> Diary</div>

	<body>
    <h1>投稿が完了しました。</h1>
    <br><br><br><br><br><br>
    <button type="button" onclick ="location.href='list.php'">記事一覧</button>

    </body>
    <br><br><br><br><br><br><br><br><br>

    <div class="footer"></div>

</html>