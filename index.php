<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>blog</title>
    <link rel="stylesheet" href="assets/css/blog.css">
</head>
	<body>
	<h1>日記</h1>
	
	<form method="POST" action="check.php" >
        <div>日付</div>
        <input type="text" col="2" rows="2"name="date">
        <br>
        <div>タイトル</div>
        <input type="text" name='title'>
		<br>
        <div>本文</div>
        <textarea name="contents" cols="70" rows="20"></textarea>
        <br>
        <input type="submit" value="保存">
        <input type="file" value="ファイル選択">
		<br>
    </form>
    

	
	</body>
</html>