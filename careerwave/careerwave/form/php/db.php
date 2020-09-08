<?php
	$pdo = new PDO('mysql:dbname=info_test_db;host=localhost;charset=utf8','root', 'root');
	$stmt = $pdo->query('INSERT INTO `jobstl` (`ID`, `Title`, `Summary`, `Job`, `Salary`, `Placs`, `Station`, `StartTime`, `EndTime`, `Status`, `Holiday`, `Other`) VALUES (NULL, 'tit', 'sum', 'job', '111', 'aaaaaa', 'aaaaaa', '111', '111', 'aaa', 'aaa', 'aaa');');
	$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
	var_dump($records);
?>