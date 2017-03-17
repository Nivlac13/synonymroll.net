<!DOCTYPE html>
<html>
<head>
	<title>Synonym Roll</title>
	<link rel="stylesheet"  type="text/css" href="styles.css"/>
</head>
<body>
	<h1>
		<?php 
			$keyFile = fopen("../private/key.txt","r");
			$key = fgets($keyFile);
			fclose($keyFile);	
			if(empty($_GET["word"])){
				echo"Synonym Roll";}
			else{
				$word = $_GET["word"];
				$api_results= unserialize(file_get_contents("https://words.bighugelabs.com/api/2/$key/$word/php"));
				if(empty($api_results["noun"])){
					$api_results["noun"]=array("syn" => array(""));}
				if(empty($api_results["verb"])){
					$api_results["verb"]=array("syn" => array(""));}
				$synonyms = array_merge($api_results["noun"]["syn"],$api_results["verb"]["syn"]);
				foreach($synonyms as &$synonym){
					if($synonym != ""){
						echo $synonym.", ";}}	
			}
		?>
	</h1>
	<form>
		<input type="text" name="word"/>
	</form>
	<img src="roll.jpg">
</body>
</html>

