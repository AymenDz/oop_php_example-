<?php

/*
+------------------------+
- * by : Aymen Benchiheub -
- * Date: 2/19/2017      -
- * Time: 8:24 AM        -     
+------------------------+

*/


include_once('class__.php');


$user = new person();
$user->name = "Aymen";
$user->password= 123457;
$user->age  = 23;
$user->country = "Algeria";
$user->sing_up_check();


?>
<!DOCTYPE html>
<html>
	<head>
		<title>OOP Testing</title>
	</head>
	<body>

	</body>
</html>
