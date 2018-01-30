<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>記事名</title>
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
        タイトル&emsp;<input type="text" value="" name="title" id="title" size="48"><br><br>
        材料(<input type="text" value="" name="amount" id="amount" size="3">)人分<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="ingredients" id="ingredients" rows="5" cols="50" wrap="hard"></textarea><br>
        レシピ<br>
        &emsp;&emsp;&emsp;&emsp;1<br>&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe1" id="recipe1" rows="3" cols="50" wrap="hard"></textarea><br>
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
        <textarea value="" name="memo" id="memo" rows="5" cols="50" wrap="hard"></textarea><br></p>
        <br>
        <a href="list.php">戻る</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href="input.php">編集</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="submit" value="削除" onclick="Javascript:transition()">
        <hr width="500">
    </div>
    </body>
</body>
</html>