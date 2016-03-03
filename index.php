<?php

$dbConfig = parse_ini_file('db.ini');





try{//attraper là, encadrer dans ne structure try

	$dsn = sprintf('%s:host=%s;dbname=%s', $dbConfig['driver'], $dbConfig['host'],$dbConfig['dbname']);

	$cn = new PDO($dsn, $dbConfig['username'], $dbConfig['password']);

	$cn->query('SET CHARACTER SET UTF8'); //SI ça fonctionne, on configure la requete Sql !! pour dire la chaine de carctère
	$cn->query('SET NAMES UTF8');

}catch(PDOException $e){

	echo $e ->getMessage();
}//Sorte de if else - try


$bookStmnt = 'SELECT * FROM books';

$pdoStmnt = $cn->query($bookStmnt);
$books = $pdoStmnt->fetchAll();
//Pas encore le résultat, on lka juste envoyer 

foreach ($books as $book ) {

	// echo $book['title'].'<br>'; Affiche tous les titres des livres Les uns apres les autres
}
