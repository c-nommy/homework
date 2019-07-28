<?php

  $date = $_POST['date'];
  $title = $_POST['title'];
  $contents = $_POST['contents'];



  if ($date == '') {
    $date_result = '日付がありません';
} else {
    $date_result = '日付:' . $date ;
}

if ($title == '') {
    $title_result = 'タイトルがありません。';
} else {
    $title_result = 'タイトル：' . $title;
}

if ($contents == '') {
    $contents_result =  '本文の内容がありません。';
} else {
    $contents_result = '本文の内容：' . $contents;
}
?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>本文内容確認</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/blog.css">

  </head>
  <body>  
  <h1>本文内容確認</h1>
    <p><?php echo $date_result; ?></p>
    <p><?php echo $title_result; ?></p>
    <p><?php echo $contents_result; ?></p>  
    <form method="POST" action="thanks.php">
        <input type="hidden" name="date" value="<?php echo $date; ?>">
        <input type="hidden" name="title" value="<?php echo $title; ?>">
        <input type="hidden" name="contents" value="<?php echo $contents; ?>">
        <input type="button" value="戻る" onclick="history.back()">
        <?php if ($date != '' && $title != '' && $contents != ''): ?>
            <input type="submit" value="OK">
        <?php endif; ?>
    </form>
</body>
</html>
