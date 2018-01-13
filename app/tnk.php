<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ありがとうございました</title>
</head>
<body>

    <?php
    //セッションスタート
    session_start();
    //postデータのトークンを確認
    if (isset($_POST['Token'])) {
        $post_token = $_POST['token'];
    }else {
        $post_token = 'err123';
    }
    //セッションデータのトークンを確認
    if (isset($_SESSION['Token'])) {
        $session_token = $_SESSION['token'];
    }else {
        $session_token = 'err123';
    }
    //トークンを確認し、一致しなければエラー出力
    if($post_token != $session_token || $_SERVER['REQUEST_METHOD']!='POST'){
        echo '<h1>エラー：ページ遷移が正しくありません</h1>';
    }else{

        $myname = htmlspecialchars($_SESSION['myname'], ENT_QUOTES,'UTF-8');
        echo '<h1>'.$myname.'様ありがとうございました</h1>';


        // セッション情報を削除する
        // セッション変数を全て解除する
        $_SESSION = array();

        // セッションを切断するにはセッションクッキーも削除する。
        // Note: セッション情報だけでなくセッションを破壊する。
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // 最終的に、セッションを破壊する
        session_destroy();

    }
    ?>
</body>
</html>