<ul>
<?php foreach ($datas['books'] as $book ) : ?>

			<li><a href="index.php?a=show&e=books&id=<?php echo $book->id ?>"><?php echo $book->title; ?>
			</a></li> <!--Affiche tous les titres des livres Les uns apres les autres-->
			
		<?php endforeach; ?>

</ul>