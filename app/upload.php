<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<?php
// 一時アップロード先ファイルパス
$file_tmp  = $_FILES["file_1"]["tmp_name"];

// 正式保存先ファイルパス
$file_save = "/var/www/html/files/" . $_FILES["file_1"]["name"];

// ファイル移動
$result = @move_uploaded_file($file_tmp, $file_save);
if ( $result === true ) {
    echo "正常にアップロードされました。";
} else {
    echo "正常にアップロードされませんでした。";
}
?>

<img src="files/<?php echo $datal;?>">
</body>
</html>