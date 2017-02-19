<?php

/*
+------------------------+
- * by : Aymen Benchiheub -
- * Date: 2/19/2017      -
- * Time: 8:24 AM        -     
+------------------------+

*/

class person{

	public $name;
	public $password;
	public $age;
	public $country;
	const MAX_AGE = 50;
	const MIN_AGE = 18;

	public function sing_up_check(){
		if($this->age < self::MIN_AGE || $this->age > self::MAX_AGE){

			echo "Opps We Are sorry You Can't SingUp :(";

		}else{
			echo "<h2>SingUp Done</h2>";
			echo "USER_NAME : " . $this->name . '<br>';
			echo "PASSWORD : " . $this->password . '<br>';
			echo "USER_AGE : " . $this->age . '<br>';
			echo "USER_COUNTRY : " . $this->country . '<br>';
		}
	}
}
