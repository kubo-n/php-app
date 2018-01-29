<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規登録</title>
</head>
<script type="text/javascript">
     //画像アップロード処理
     function file_upload()
     {
        // フォームデータを取得
        var formdata = new FormData(document.getElementById("my_form"));

        // XMLHttpRequestによるアップロード処理
        var xhttpreq = new XMLHttpRequest();
        xhttpreq.onreadystatechange = function() {
        if (xhttpreq.readyState == 4 && xhttpreq.status == 200) {
            alert(xhttpreq.responseText);
        }
        };
        xhttpreq.open("POST", "upload.php", true);
        xhttpreq.send(formdata);
     }  
    //登録ページ遷移処理
    function transition(){
    //入力チェック
        if (document.getElementById('title').value == "" ){
            alert('タイトルが未入力です。');
        }else if(document.getElementById('amount').value == "" ){
            alert('何人分かが未入力です。');
        }else if(document.getElementById('ingredients').value == "" ){
            alert('材料が未入力です。');
        }else if(document.getElementById('recipe1').value == "" ){
            alert('レシピが未入力です。');        
        }else{
            // 「OK」時の処理 ＋ 確認ダイアログの表示
            if(window.confirm('登録してもよろしいですか？')){
                location.href = "entry.php"; // 遷移
            }
        }
    }
</script> 

<body>
    <body background="img/back.gif" text="#660000">
        <div align="center">
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
        <div align="left">
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <font size="2">※タイトル、分量(何人分)、材料、レシピは必須項目です。</font><br><br>          
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        タイトル&emsp;<input type="text" value="" name="title" id="title" size="48"><br><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        材料(<input type="text" value="" name="amount" id="amount" size="3">)人分<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="ingredients" id="ingredients" rows="5" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        レシピ<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        1<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe1" id="recipe1" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        2<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe2" id="recipe2" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        3<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe3" id="recipe3" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        4<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe4" id="recipe4" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        5<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe5" id="recipe5" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        6<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe6" id="recipe6" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        7<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe7" id="recipe7" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        8<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe8" id="recipe8" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        9<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe9" id="recipe9" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        10<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="recipe10" id="recipe10" rows="3" cols="50" wrap="hard"></textarea><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        その他メモ<br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <textarea value="" name="memo" id="memo" rows="5" cols="50" wrap="hard"></textarea><br>
        <form id="my_form">
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        写真選択&emsp;
        <input type="file" name="file_1">
        <button type="button" onclick="file_upload()">アップロード</button>
        </form>
        <br>
        </div>
        <input type="submit" value="登録" onclick="Javascript:transition()">
        <hr width="500">
    </div>
    </body>
</body>
</html>