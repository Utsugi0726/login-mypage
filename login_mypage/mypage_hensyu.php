<?php
mb_internal_encoding("utf8");
session_start();

if(empty($_SESSION['id'])){
    header('Location:http://localhost/login_mypage/login_mypage/login_error.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">

</head>

<body>
<header>
    <img src="4eachblog_logo.jpg">
    <div class="logout"><a href="log_out.php">ログアウト</a></div>
</header>

<main>
<div class="confirm">
    <div class="form_contents">
            <h2>会員情報</h2>
            <p><?php echo "こんにちは！  ".$_SESSION['name']."さん"?></p>
    <form action="mypage_update.php" method="post">
             <div class="picture">
             <img src="<?php echo $_SESSION['picture']; ?>">
             </div>

        <div class="profile">
            <p>氏名 : <input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
            <p>メール : <input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail"></p>
            <p>パスワード : <input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password"></p>
        </div>
        <div class="comments">
        <textarea rows="5" cals="70" name="comments"><?php echo $_SESSION['comments'];?></textarea>
        </div>
        <div class="toroku">
            <input type="submit" class="submit_button" size="35" value="この内容に変更する">
        </div>
    
    </form>
    </div>
</div>

</main>
<footer>
    © 2018 InterNous.inc. All rights reserved
</footer>

</body>
</html>