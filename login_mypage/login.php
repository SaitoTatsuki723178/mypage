<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ログイン画面</title>
    <link rel="stylesheet"type="text/css"href="login.css">
</head>
<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>
    <main>
    <form action="mypage.php" method="post">
        <div class="form_contents">
            <div class="mail">
               <label>メールアドレス</label><br>
                <input type="text" class="formbox" size="40" name="mail">
            </div>
            <div class="password">
                <label>パスワード</label><br>
                <input type="text" class="formbox" size="40" name="password">
            </div>
            <input type="checkbox" class="formbox" name="check" size="40" value="1">ログイン状態を保持する
            <?php
            if(isset($_COOKIE['login_keep'])){
                echo "checked='checked'";
            }
            ?>
            <div class="loginbutton">
                <input type=submit class="submit_button" size="35" value="ログイン">
            </div>
            </div>
        </form>
    </main>
<footer>
© 2018 InterNous.inc. All rights reserved    
</footer>
</body>
</html>