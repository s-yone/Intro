<?php

$dice1 = mt_rand(1,6);
$dice2 = mt_rand(1,6);
$msg = false;
if($dice1 == $dice2){
	$msg = true;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
	<title>サイコロ</title>
</head>
<body>
　<h1>サイコロ</h1>
<p>サイコロの目は「<?php echo $dice1.", ".$dice2; ?>」でした</p>
<?php if($msg) :?>
<h2 style="color:red;">ゾロ目です！！</h2>
<?php endif; ?>
<!-- $_SERVER["SCRIPT_NAME"]は今読んでいるスクリプトを呼び出す -->
<p><a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">もう一度！</a></p>
</body>
</html>
