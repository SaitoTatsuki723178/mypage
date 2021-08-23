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
            <p>メールアドレスまたはパスワードが間違っています。</p>
            <div class="addless">
               <label>メールアドレス</label><br>
                <input type="text" class="formbox" size="40" name="mail">
            </div>
            <div class="password">
                <label>パスワード</label><br>
                <input type="text" class="formbox" size="40" name="password">
            </div>
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