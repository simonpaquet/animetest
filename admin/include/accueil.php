<?php
	$sql = "SELECT
				`id`,
				`page`,
				`title`
			FROM
				`page`
			WHERE
				1;";
	if( !($result = $db->query( $sql ))){
		die( 'HAHAHAHAH MEME PAS EN REVE' );
	}
	$ajouter = function(){
		echo "<a href=\"index.php?page=ajouter\">+</a>";
	}
?>
<?php $ajouter();?>
<table border="1">
	<tr>
		<td>Page</td>
		<td>Action</td>
	</tr>
	<?php if( $result->num_rows > 0 ):?>
		<?php while( $row = $result->fetch_assoc()):?>
	<tr>
		<td><?php echo $row['title']?></td>
		<td>
			<a href="index.php?page=modifier&id=<?php echo $row['id']?>">Modifier</a>
			<a href="index.php?page=supprimer&id=<?php echo $row['id']?>">Supprimer</a>
			<a href="../index.php?page=<?php echo $row['page']?>" target="_moncms">Voir</a>
		</td>
	</tr>
		<?php endwhile;?>
	<?php else:?>
		<tr>
			<td colspan="2">Aucun resultats</td>
		</tr>
	<?php endif;?>
</table>
<?php $ajouter();?>
