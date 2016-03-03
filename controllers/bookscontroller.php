
<?php 
//Machin qui observe ce que l'utili fait/veux, qualité des données, et en fonction de cela renvoyer la bonne vue (chef d'orchestre)


function index(){

	include('models/' . $GLOBALS['e']. '.php');
	$data['books'] = getbooks();
	$data['view'] = 'views/'. $GLOBALS['a'] . $GLOBALS['e'] .'.php'; 
	return $data;
}



function show(){

if(isset($_GET['id'])) { // SI id dans url, on crée le gabarit sql pour reprendre  un livre, Test si ID
	$id = intval($_GET['id']);
	include('models/' . $GLOBALS['e']. '.php'); // execute la fonction dans la var a (models)
	$data['book'] = getBook($id);
	$data['view'] = 'views/'. $GLOBALS['a'] . $GLOBALS['e'] .'.php';
	return $data;

	}else{
		die('il manque l\'id');
	}

}