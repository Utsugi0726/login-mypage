<?php
mb_internal_encoding("utf8");
session_start();
if(isset($_SESSION['id'])){
    header("Location:http://localhost/login_mypage/login_mypage/mypage.php");
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="login_error.css">
</head>

<body>
<header>
    <img src="4eachblog_logo.jpg">
    <div class="login"><a href="login.php">ログイン</a></div>
</header>

<main>
    <form action="mypage.php" method="post">
     <div class="form_contents">
        <p>メールアドレスまたはパスワードが間違っています。</p>
        <div class="mail">
            <label>メールアドレス</label><br>
            <input type="text" class="formbox" size="40" name="mail" >
        </div>
        <div class="password">
            <label>パスワード</label><br>
            <input type="password" class="formbox" size="40" name="password" >
        </div>
        <div class="logincheck">
        <label><input type="checkbox" class="formbox" size=40 name="login_keep"value="login_keep">ログイン状態を保持する</label>
        </div>
        <div class="loginbutton">
            <input type="submit" class="submit_button" size="35" value="ログイン">
        </div>
     </div>
    </form>

</main>

<footer>
    © 2018 InterNous.inc. All rights reserved
</footer>

</body>
</html>