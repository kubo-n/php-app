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
    try
	{	
        $title = $_GET[title];
        $id = $_GET[id];

		//ヘッダー情報を取得
		$pdo -> beginTransaction();		
        $stmh = $pdo->prepare("select*from recipe_header where id =$id");
		$stmh->execute();
        $pdo -> commit();

        //ヘッダー内容の確認
        foreach ($stmh as $row) :
            $amount = $row['amount'];
            $ingredients = $row['ingredients'];
            $memo = $row['memo'];
            $picture = $row['picture'];
//            $inserted_date = $row['inserted_date'];
//            $updated_date = $row['updated_date'];
        endforeach;

        //ディテール情報を取得(レシピ1)⇒面倒くさい処理。10個必要。
        $pdo -> beginTransaction();		
        $step = $pdo->query("select step from recipe_detail where id =$id order by number");

        $row1.="";

        while($result = $step->fetch(PDO::FETCH_ASSOC))
        {
            $row1.=$result['step']."</br>";
        }

        // $step->execute();
        // $pdo -> commit();
        // foreach ($step as $row1):
        // $recipe1 = $row1[0];
        // endforeach;

    }
	catch(PDOException $Exception)
	{
		$pdo -> rollBack();
		print"エラーです:".$Exception -> getMessage();
	}
?>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title?></title>
</head>
<script type="text/javascript">
    //削除ページ遷移処理
    function transition(){
        // 「OK」時の処理 ＋ 確認ダイアログの表示
        if(window.confirm('削除してもよろしいですか？')){
            location.href = "delete.php"; // 遷移
        }
    }
</script> 
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
        <hr width="500">
        <a href="index.html">トップ</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
　      <a href="list.php">記事一覧</a><br>
        <hr width="500">
        <p class="txt">
        タイトル&emsp;<input type="text" value="<?php echo $title?>" name="title" id="title" size="48"><br><br>
        材料(<input type="text" value="<?php echo $amount?>" name="amount" id="amount" size="3+">)人分<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea  name="ingredients" id="ingredients" rows="5" cols="50" wrap="hard"><?php echo $ingredients?></textarea><br>
        
        レシピ<br>
        &emsp;&emsp;&emsp;&emsp;1<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea  name="recipe1" id="recipe1" rows="3" cols="50" wrap="hard"><?php echo $row1?></textarea><br>
        &emsp;&emsp;&emsp;&emsp;2<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe2" id="recipe2" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;3<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe3" id="recipe3" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;4<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe4" id="recipe4" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;5<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe5" id="recipe5" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;6<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe6" id="recipe6" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;7<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe7" id="recipe7" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;8<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe8" id="recipe8" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;9<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe9" id="recipe9" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;10<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe10" id="recipe10" rows="3" cols="50" wrap="hard"></textarea><br>
        
        その他メモ<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea name="memo" id="memo" rows="5" cols="50" wrap="hard"><?php echo $memo?></textarea><br></p>
        <br>
        <a href="list.php">戻る</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href="input.php">編集</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="submit" value="削除" onclick="Javascript:transition()">
        <hr width="500">
    </div>
    </body>
</body>
</html>