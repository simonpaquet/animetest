<?php
	if( isset( $_POST['confirmation'])){
		// confirmation OK
		$sql = "DELETE FROM
					`page`
				WHERE
					id = ". (int) $_POST['id'] ."
				LIMIT 1;";
		if ( !$db->query( $sql )) {
			die( 'Pas changer assiete pour fromage' );
		}
		header( 'Location: index.php' );
	} else {
		// affichage demande de confirmation
?>
	Voulez-vous vraiment supprimer?<br />
	<form action="index.php" method="post">
		<input type="hidden" name="page" value="supprimer"/>
		<input type="hidden" name="confirmation" value="1"/>
		<input type="hidden" name="id" value="<?php echo $_REQUEST['id']?>"/>
		<input type="submit" value="confirmer"/>
		<input type="button" value="Oh non!" onclick="history.back()" />
	</form>
<?php
	}
