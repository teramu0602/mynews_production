<?php

$host = '127.0.0.1';  // .envで設定したホストを使用
$db = 'mynews';  // .envで設定したデータベース名を使用
$user = 'teramu';  // .envで設定したユーザー名を使用
$pass = '';  // .envで設定したパスワードを使用

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "接続成功！";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage();
}
