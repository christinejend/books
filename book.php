<?php
$bookStmnt = 'SELECT * FROM books';

$pdoStmnt = $cn->query($bookStmnt);
$books = $pdoStmnt->fetchAll();


//Pas encore le résultat, on la juste envoyer 
