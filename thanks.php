<?php
require_once('function.php');
require_once('dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: index.html'); //index.htmlに飛ぶ
}

    $nickname = $_POST['nickname'];
    $content = $_POST['content'];
    $submit_time = $_POST['submit_time'];

    $stmt = $dbh->prepare('INSERT INTO kannsou_situmonn (nickname, content, submit_time) VALUES (?, ?, ?)'); //SQL文の準備
    $stmt->execute([$nickname ,$content ,$submit_time]);//?を変数に置き換えてSQLを実行
    echo $submit_time;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body class = "center">
    <h1>コメントありがとうございました！</h1>
    <p><?php echo h($nickname); ?></p>
    <p><?php echo h($content); ?></p>
    <a href = index.php>戻る</a>
</body>
</html>