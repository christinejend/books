<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Description">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<title>Document</title>
</head>
<body>
	<ul>

		<?php foreach ($books as $book ) : ?>

			<li><a href="index.php?id=<?php echo $book->id ?>"><?php echo $book->title; ?>
			</a></li> <!--Affiche tous les titres des livres Les uns apres les autres-->
			
		<?php endforeach; ?>
	?>
	<ul>
</body>
</html>