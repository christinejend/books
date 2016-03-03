<?php

$dbConfig = parse_ini_file('db.ini');
$pdoOptions = [
				PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_OBJ,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				]; // attribut pdo error mode = sera le mode execption, 
				// Les :: c'est dans une classe





try{//attraper là, encadrer dans ne structure try

	$dsn = sprintf('%s:host=%s;dbname=%s', $dbConfig['driver'], $dbConfig['host'],$dbConfig['dbname']);

	$cn = new PDO($dsn, $dbConfig['username'], $dbConfig['password'], $pdoOptions);

	$cn->query('SET CHARACTER SET UTF8'); //SI ça fonctionne, on configure la requete Sql !! pour dire la chaine de carctère
	$cn->query('SET NAMES UTF8');

}catch(PDOException $e){

	echo $e ->getMessage();
}//Sorte de if else - try











include ('book.php');

include ('view.php');