<?php
$thread_array = array();

//コメントデータをテーブル文から取得してくる
$sql = "SELECT * FROM thread";
$statement = $pdo->prepare($sql);
$statement->execute();

$thread_array = $statement;

//DB接続を切る
// $pdo = null;
// $statement = null;