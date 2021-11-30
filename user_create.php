<?php

//関数を使うためfunctions.phpをinclude
include('functions.php');

// var_dump($_POST);
// exit();

//データの受け取り
$username = $_POST['username'];
$password = $_POST['password'];

// var_dump('name');
// var_dump('password');
// exit();

// DB接続
$pdo = connect_to_db(); //データベース接続の関数、$pdoに受け取る

//SQL 登録処理実行
$sql = 'INSERT INTO users_table(id, username, password, is_admin,is_deleted,created_at, updated_at) VALUES(NULL, :username, :password,0,0,now(), now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

//処理が終わった後のページ移動
header("Location:user_input.php");
exit();


?>