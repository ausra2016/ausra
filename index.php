<html>
<head>
	<title>php</title>
</head>

<body>
<?php

	if(isset($_POST['vardas'])){
	$vardas = $_POST['vardas'];
	$slaptazodis = $_POST['slaptazodis'];
	$amzius = $_POST['amzius'];
	$gimMetai = $POST['gimMetai'];
	$gimMetai = 2017- $amzius;
	var_dump($vardas);
	var_dump($slaptazodis);
}
	else{
		$vardas = "";
		$slaptazodis = "";
	}

?>

<h1>
	Geriausia svetaine pasaulyje
</h1>

<?php if($vardas == "" || $slaptazodis == ""): ?>
<!-- kai vardo langelyje tuščia: -->

<form action="index.php" method="POST">
	<input type="text" name="vardas" value="<?= $vardas;?>">
	<input type="text" name="amzius" value="<?= $amzius;?>">
	<input type="text" name="slaptazodis" value="<?= $slaptazodis;?>">
	<input type="submit">
	
</form>
<?php else :?>
	<h2> Sveiki prisijungę, <?= $vardas; ?>, tu gimei <?= $gimMetai; ?></h2>
<?php endif; ?>



</body>
</html>

