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
			if(empty($word)){
				echo"Synonym Roll";}
			else{
				$api_results= unserialize(file_get_contents("https://words.bighugelabs.com/api/2/f20ef01bf13e1ab38ce70b8885a03846/$word/php"));
				if(empty($api_results["noun"]){
					$api_results["noun"]=array("syn" => array("")}
				if(empty($api_results["verb"]){
					$api_results["verb"]=array("syn" => array("")}
				$synonyms = array_merge($api_results["noun"]["syn"],$api_results["verb"]["syn"]);
				print_r($synonyms);
			}
		?>
	</h1>
	<form>
		<input type="text" name="word"/>
	</form>
	<img src="roll.jpg">
</body>
</html>

