<!DOCTYPE html>
<html>
<head>
	<title>PHP練習</title>
</head>
<body>
<!-- action=""であるのでこのファイルで受け取る -->
<form action="" method="POST">
<!--  htmlspecialchars -> 悪意のあるコードをエスケープする　-->
	<input type="text" name="username" placeholder="user name" value="<?php echo htmlspecialchars($username,ENT_QUOTES,'UTF-8'); ?>">
	<input type="submit" value="check!">
	<?php if($err){
		echo "Too long!"
	}?>
</form>

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

// static（インスタンスを作らなくても使用出来る）
// 抽象クラス（継承されることを目的に使用される）

// 抽象クラス
	abstract class BaseUser
	{
		public $name;
		abstract public function sayHi();
	}

// interface(抽象メソッドのみ宣言可能)
	//全てabstractになる
	interface sayHi {

	// 必ずpublicになる
		pubic function sayHi();
	}

	interface sayHello{

		pubic function sayHello();
	}

// 複数のインターフェイスを継承可能
	class User inplements sayHI , sayHello{
 # code...
	}

// classs名は1文字目は大文字
	class User
	{
 	//アクセス権
 	//private(そのクラス内から飲みアクセス可能)
 	//protected(そのクラス＋親子クラス内からのみアクセス可能)
 	//public（どこからでも）

 	//Property
		public $name;
		pubic static $count = 0

 	//コンストラクター
		function __construct(argument)
		{
 		# code...
			$this->$name = $argument;
			self::$count++;
		}

 	//method
		public function sayHello(){
			echo "hello $this->name"
		}

 	//finalをつけることでオーバーライド禁止
		final public function sayHi(){
			echo "hi $this->name"
		}

 	//static
		public static function getMessage(){
			echo "hello from static classs";
		}
	}

//staticの呼び出し
	User::getMessage();

	$tom = new User("Tom");
	$bob = new User("Bob");

 echo $tom->$name; // Tom
 $bob->sayHello(); // hi, i am Bob!!

 echo User::$count; //2(共通される)

//extendsでクラスの継承
 class AdminUser extends User{
 }

 //ファイルの呼び込み
 // require(エラーが発生した場合、fatal errorで終了)
 // require_once(equire_once 文は require とほぼ同じ意味ですが、 ファイルがすでに読み込まれているかどうかを PHP がチェックするという点が異なります。 すでに読み込まれている場合はそのファイルを読み込みません。)

 // require "User.class.php";

 // include(warningを発生させて処理を続行)
 // include_once

 // autoload(クラスのみ使用可能)
 // インスタンス生成時に対象となるクラスが読み込まれていない時に呼ばれる関数 
 // spl_autoload_register(function($class){
 //  require $class . ".class.php";
 // });

 // // 名前空間(ファイルの先頭に書く)
 // // (区切り文字はバックスラッシュ)
 // namespace Intro\Lib;
 // //Intro\LIbをLIbで管理するという意味
 // use Intro\Lib as Lib;
 // $bob = new Lib\User("Bob");

 //// 例外処理
 // function div($a,$b){
 // 	try{
 // 		if($b === 0){
 // 			throw new Exception("cannot divide by 0!");
 // 		}
 // 		echo $a / $b;
 // 	}catch (Exception $e){
 // 	// getMessageはExceptionで定義されている
 // 		echo $e->getMessage();
 // 	}
 // }
 // div(7,2);
 // div(5,0);

//　フォームからのデータ処理
// $_SERVER['REQUEST_METHOD']で受け取る
 $username = "";
 if($_SERVER['REQUEST_METHOD'] === 'POST'){

 	$username = $_POST['username'];
 	$err = false;
 	if(strlen($username) > 8){
 		$err = true;
 	}
}

// Cookie(ブラウザに保存される)
//// cookieをセットする
// setcookie("username","s_yone");
//// 第３引数で有効期限をセットする
// setcookie("username","s_yone",time()+60*60);

//// cookieを削除する（有効期限を過去のものにする）
// setcookie("username","s_yone",time()-60*60);

// cookieの呼び出し
echo $_COOKIE['username'];


// Session（サーバー側に保存される）（改ざんされない、中身が見られない）
// サーバー側
 session_start();
// sessionの呼び出し
 echo $_SESSION['username'];
 // sessionの削除
 unset($_SESSION['username']);
 ?>

</body>
</html>

