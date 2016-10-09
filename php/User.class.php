// classs名は1文字目は大文字
	class User
	{
		public $name;
		pubic static $count = 0

		function __construct(argument)
		{
			$this->$name = $argument;
			self::$count++;
		}

		public function sayHello(){
			echo "hello $this->name"
		}

		final public function sayHi(){
			echo "hi $this->name"
		}

		public static function getMessage(){
			echo "hello from static classs";
		}
	}