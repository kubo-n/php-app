<!DOCTYPE html>
<html lang="ja">
<?php
	// // サーバ接続
	$db_user = "testuser";
	$db_pass = "Nananana1?";
	$db_host = "localhost";
	$db_name = "recipe";
	$db_type = "mysql";

	$dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";
	try
	{
		$pdo = new PDO($dsn,$db_user,$db_pass);
		$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	}
	catch(PDOException $Ecception)
	{
		die('エラー:'.$Ecception->getMessage());
    }
?>
<head>
    <meta charset="UTF-8">
    <title>記事一覧</title>
</head>
<body>
    <body background="img/back.gif" text="#660000">
    <style>
        .wrapper {
            margin: 0 auto;
            text-align: center;
        }
        .txt {
            display: inline-block;
            text-align: left;
            width: 500px;
        }
    </style>
     <div class="wrapper">
        <img src="img/title.jpg" width="500" alt="title">
        <br><br>
 <!--   <form action="receive.php" method="post">
        名前：<input type="text" name="myname"><br>
        年齢：<input type="number" name="age"><br>
        <input type="submit" value="データ送信">
    </form>
-->
        <hr width="500">
        <a href="index.html">トップ</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
　      <a href="list.php">記事一覧</a><br>
        <hr width="500">
        <p class="txt">
        <a href="input.php">新規</a>
        <br></p>
        <p class="txt">
        <a href="read.php">・ここに一覧</a>
        <br></p>
        <hr width="500">
    </div>
    </body>
</body>
</html>