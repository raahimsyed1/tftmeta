<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TFT Meta</title>
		<link rel="stylesheet" href="../design.css" type="text/css" />
		<link rel="icon" href="favicon.ico" type="image" sizes="16x16">
	</head>


	<body>
		
		<form action="calc.php" method="post">
		First Num: <input type="number" name="num1"><br>
		Operator: <input type="text" name="operator"><br>
		Second Num: <input type="number" name="num2"><br>
		<input type="submit">
		</form>
	<?php
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$operator = $_POST["operator"];
		
		
		if($operator == "+"){
			echo $num1 + $num2;
		}
		elseif($operator == "-"){
			echo $num1 - $num2;
		}
		elseif($operator == "/"){
			echo $num1 / $num2;
		}
		elseif($operator == "*"){
			echo $num1 * $num2;
		}		
		else
			echo "error";
		
		
	?>
	
		

	</body>
</html>