<?php
	// // サーバ接続
	// $mysqli = new mysqli('localhost','testuser','Nananana1?','recipe');

	// if ($mysqli->connect_error){
	// 	die('Connect Error:('. $mysqli->connect_errno .')'.$mysqli->connect_error);
	// }

	// //print'接続完了';
	// $mysqli->close();
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
		print"接続しました...<br>";
	}
	catch(PDOException $Ecception)
	{
		die('エラー:'.$Ecception->getMessage());
	}
	//insert
	try
	{	
		$file_tmp  = $_FILES["file_1"]["tmp_name"];
		print $file_tmp;

		$pdo -> beginTransaction();
		$sql = "insert into recipe_header (title,amount,ingredients,memo,picture,inserted_date,updated_date)
		values(:title,:amount,:ingredients,:memo,'picture',now(),now())";
		$stmh = $pdo -> prepare($sql);
		$stmh -> bindValue(':title',$_POST[title],PDO::PARAM_STR);
		$stmh -> bindValue(':amount',$_POST[amount],PDO::PARAM_INT);
		$stmh -> bindValue(':ingredients',$_POST[ingredients],PDO::PARAM_STR);
		$stmh -> bindValue(':memo',$_POST[memo],PDO::PARAM_STR);
		//$stmh -> bindValue(':picture',$_POST['file_1'],PDO::PARAM_STR);
		$stmh -> execute();
		$pdo -> commit();
	}catch(PDOException $Exception){
		$pdo -> rollBack();
		print"era-desu:".$Exception -> getMessage();
	}
	?>