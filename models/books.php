<?php
//Logique applicative

function getBooks(){

$bookStmnt = 'SELECT * FROM books';

$pdoStmnt = $GLOBALS['cn']->query($bookStmnt);// $Globale rècupere toutes les ))) avec des scopes globales

 return $pdoStmnt->fetchAll();

}
//Pas encore le résultat, on la juste envoyer


function getBook($id){
	$bookSql = 'SELECT * FROM books WHERE id= :id'; //protege
	$bookStmnt = $GLOBALS['cn'] -> prepare($bookSql); //Ecrase la requete du dessus
	$bookStmnt->execute([':id'=>$_GET['id']]);// Remplace le joker par ce que l'utili a mis dans sa recherche
	return $bookStmnt->fetch(); // Fetch() piur une ligne
}