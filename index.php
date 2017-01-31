<!DOCTYPE html>
<html>
<head>
	<title>Synonym Roll</title>
	<link rel="stylesheet"  type="text/css" href="styles.css"/>
</head>
<body>
	<h1>
		<?php 
			$word = $_GET["word"];
			if($word ==null){
				echo"Synonym Roll";}
			else{
				echo unserialize(file_get_contents("https://words.bighugelabs.com/api/2/f20ef01bf13e1ab38ce70b8885a03846/" . $word."/php"));}
	</h1>
	<form>
		<input type="text" name="word"/>
	</form>
	<img src="roll.jpg">
</body>
</html>

