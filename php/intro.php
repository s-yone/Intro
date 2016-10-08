<!DOCTYPE html>
<html>
<head>
	<title>PHP練習</title>
</head>
<body>
  
<?php 
$sales = [
"apple" => 200,
"orange" => 300,
"meron" => 500ß
];

$color =["red","blue","pink"];

// [foreach使い方]

// foreach ($sales as $key => $value){
// 	echo "($key) $value";
// }

// foreach($sales as $value){
// 	echo "$value";
// };

// [foreach if while for コロン構文]
// foreach($colors as $value) :
// 	echo "$value";
// endforeach;
// }

//  [関数]
//  $x = 5.6;
//  echo ceil($X); // 6　小数点以下を切り上げます。
//  echo floor($x); //5　小数点以下を切り捨てます。
//  echo round($x); //6　数値を四捨五入します。
//  echo rand(1,10); //1~10のランダム値

$s1 = "hello";
$s2 = "犬";
$s3 = 5.6;

// echo strlen($1); //文字列の長さ
// printf("%s - %s - %.3f","$s1","$2","$3")
// %s　→　stringで表示
// %.3f　→　float小数点３桁で表示

// conunt($color); //3
// implode("@",$color); //第２引数の配列の要素を第１引数の連結要素で区切って表示する

// classs名は1文字目は大文字
 class User
 {
 	//アクセス権
 	//private(そのクラス内から飲みアクセス可能)
 	//protected(そのクラス＋親子クラス内からのみアクセス可能)
 	//public（どこからでも）

 	//Property
 	public $name;

 	//コンストラクター
 	function __construct(argument)
 	{
 		# code...
 		$this->$name = $argument;
 	}

 	//method
 	public function sayHello(){
 		echo "hello $this->name"
 	};

 	//finalをつけることでオーバーライド禁止
 	final public function sayHi(){
 		echo "hi $this->name"
 	};
 }

 $tom = new User("Tom");
 $bob = new User("Bob");

 echo $tom->$name; // Tom
 $bob->sayHello(); // hi, i am Bob!!

//extendsでクラスの継承
 class AdminUser extends User{
 }
?>

</body>
</html>

