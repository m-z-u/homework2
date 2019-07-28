<?php

require_once('function.php');

//getできた場合は、　index.htmlに戻す
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    header('Location: index.html');
    exit;
}


    $nickname = $_POST['nickname'];
    $content = $_POST['content'];
    $submit_time = $_POST['submit_time'];


    if ($nickname == '') {
        $nickname_result = 'お名前が入力されていません。';
    } else {
        $nickname_result = 'お名前：' . $nickname .'さん';
    }

    if ($content == '') {
        $content_result =  'コメントが入力されていません。';
    } else {
        $content_result = 'コメント内容：' . $content;
    }

    
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">

</head>
<body class = "center">
<h1>入力内容確認</h1>
    <p><?php echo h($nickname_result); ?></p>
    <p><?php echo h($content_result); ?></p>
    <button type="button" onclick="history.back()">戻る</button>
    <!-- thanks.php にポスト送信するためのボタン-->
    <form method="POST" action="thanks.php">
    <input type="hidden" name="nickname" value="<?php echo h($nickname); ?>">
    <input type="hidden" name="content" value="<?php echo h($content); ?>">
    <input type="hidden" name="submit_time" value="<?php echo h($submit_time); ?>">
    <?php echo h($submit_time); ?>
        <?php if ($nickname != '' && $content != ''): ?>
            <input type="submit" value="OK">
        <?php endif; ?>
    </form>
</body>
</html>