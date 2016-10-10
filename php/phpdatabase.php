<?php

define('DB_DATABASE','sample_db');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','dbuser');
// databaseに接続するための文字列を定義（各DBによって異なる）
define('PDO_DSN','mysql:dbhost=localhost;dbname=' . DB_DATABASE);

try {
	// connect
	$db = new PDO('mysql:host=localhost;dbname=sample_db', 'dbuser', 'dbuser');
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//insert
	$db->exec("insert into users(name,score) values('satou',55)");
	echo "user added!";

	//disconnect
	$db = null;

}catch(PDOException $e){
	echo $e->getMessage();
	exit;
}
?>