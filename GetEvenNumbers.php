<html>
	<head>
		<title>Get Even Numbers Practice</title>
	</head>
	<body>
		<form action="getEvenNumbers.php" method="get">
			Number: <input type="number" name="n">
			<input type="submit" value="Submit"> 
		</form>
		<?php
			$n = $_GET["n"]; 
			
			echo "Even numbers: ";
			for ($i = 0; $i <= $n; $i = $i + 2) {
				echo $i; 
				echo "\n";
			}
			
			echo "\n";
			
			echo "All factors: "; 
			for ($i = 2; $i < $n; $i++) {
				if ($n % $i == 0) {
					echo $i; 
					echo "\n";
				}
			}
		?>
	</body>
</html>
