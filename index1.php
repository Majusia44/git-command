<html>
<head>
<body>
	<br>
	<br>
	<form method="POST" action="">
		<center>
		<input type="text" name="liczba1">
		<select name="znak">
			<option>+</option>
			<option>-</option>
			<option>/</option>
			<option>*</option>
			<option>%</option>
			<option>^</option>
		</select>
		<input type="text" name="liczba2">
        <select name="znak">
			<option>+</option>
			<option>-</option>
			<option>/</option>
			<option>*</option>
			<option>%</option>
			<option>^</option>
		</select>
        <input type="text" name="liczba3">
        <select name="znak">
			<option>+</option>
			<option>-</option>
			<option>/</option>
			<option>*</option>
			<option>%</option>
			<option>^</option>
		</select>
        <input type="text" name="liczba4">
        <select name="znak">
			<option>+</option>
			<option>-</option>
			<option>/</option>
			<option>*</option>
			<option>%</option>
			<option>^</option>
		</select>
        <input type="text" name="liczba5">
        <select name="znak">
			<option>+</option>
			<option>-</option>
			<option>/</option>
			<option>*</option>
			<option>%</option>
			<option>^</option>
		</select>
        <input type="text" name="liczba6">
        <select name="znak">
			<option>+</option>
			<option>-</option>
			<option>/</option>
			<option>*</option>
			<option>%</option>
			<option>^</option>
		</select>
        <input type="text" name="liczba7">
        <select name="znak">
			<option>+</option>
			<option>-</option>
			<option>/</option>
			<option>*</option>
			<option>%</option>
			<option>^</option>
		</select>
        <input type="text" name="liczba8">
        <select name="znak">
			<option>+</option>
			<option>-</option>
			<option>/</option>
			<option>*</option>
			<option>%</option>
			<option>^</option>
		</select>
        <input type="text" name="liczba9">
        <select name="znak">
			<option>+</option>
			<option>-</option>
			<option>/</option>
			<option>*</option>
			<option>%</option>
			<option>^</option>
		</select>
        <input type="text" name="liczba10">
		<br>
		<br>
		<input type="submit" value="Licz">
	</center>
	</form>
	<?php
	error_reporting(0);
	$liczba1 = $_POST['liczba1'];
	$liczba2 = $_POST['liczba2'];
    $liczba3 = $_POST['liczba3'];
    $liczba4 = $_POST['liczba4'];
    $liczba5 = $_POST['liczba5'];
    $liczba6 = $_POST['liczba6'];
    $liczba7 = $_POST['liczba7'];
    $liczba8 = $_POST['liczba8'];
    $liczba9 = $_POST['liczba9'];
    $liczba10 = $_POST['liczba10'];

	$znak = $_POST['znak'];
	$wynik = "";

	switch ($znak)
	{
		case "+";
			$wynik = $liczba1 + $liczba2 + $liczba3 + $liczba4 + $liczba5 + $liczba6 + $liczba7 + $liczba8 + $liczba9 + $liczba10;
			echo "<center><table><tr><td bgcolor=pink>".$wynik."</td</tr></table></center>";
			break;
		case "-";
			$wynik = $liczba1 - $liczba2 - $liczba3 - $liczba4 - $liczba5 - $liczba6 - $liczba7 - $liczba8 - $liczba9 - $liczba10;
			echo "<center><table><tr><td bgcolor=pink>".$wynik."</td</tr></table></center>";
			break;
		case "*";
			$wynik = $liczba1 * $liczba2 * $liczba3 * $liczba4 * $liczba5 * $liczba6 * $liczba7 * $liczba8 * $liczba9 * $liczba10;
			echo "<center><table><tr><td bgcolor=pink>".$wynik."</td</tr></table></center>";
			break;
		case "/";
			$wynik = $liczba1 / $liczba2 / $liczba3 / $liczba4 / $liczba5 / $liczba6 / $liczba7 / $liczba8 / $liczba9 / $liczba10;
			echo "<center><table><tr><td bgcolor=pink>".$wynik."</td</tr></table></center>";
			break;
		case "%";
			$wynik = $liczba1 % $liczba2 % $liczba3 % $liczba4 % $liczba5 % $liczba6 % $liczba7 % $liczba8 % $liczba9 % $liczba10;
			echo "<center><table><tr><td bgcolor=pink>".$wynik."</td</tr></table></center>";
			break;
		case "^";
			$wynik = pow($liczba1,$liczba2,$liczba3,$liczba4,$liczba5,$liczba6,$liczba7,$liczba8,$liczba9,$liczba10);
			echo "<center><table><tr><td bgcolor=pink>".$wynik."</td</tr></table></center>";
			break;


	}

	?>
</body>
</head>
</html>