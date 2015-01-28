<?php
	if( count( $_POST ) == 0 ) {
		$sql = "SELECT
					`id`,
					`title`,
					`menu_title`,
					`body`,
					`css`,
					`page`
				FROM
					`page`
				WHERE
					`id` = " . (int) $_REQUEST['id'] . ";";
		if ( !( $result = $db->query( $sql ) ) ) {
			die( 'HAHAHAHAH MEME PAS EN REVE 2, la revanche' );
		}
		if ( $result->num_rows == 0 ) {
			die( 'Pas de resultats' );
		}
		$row = $result->fetch_assoc();
		?>
		<form action="index.php" method="post">
			<input type="hidden" name="data[id]" value="<?php echo $row['id']?>"/>
			<input type="hidden" name="page" value="modifier"/>
			Title:<br/>
			<input type="text" name="data[title]" value="<?php echo $row['title']?>"/><br/>
			Menu Title:<br/>
			<input type="text" name="data[menu_title]" value="<?php echo $row['menu_title']?>"/><br/>
			Page:<br/>
			<input type="text" name="data[page]" value="<?php echo $row['page']?>"/><br/>
			Body:<br/>
			<textarea name="data[body]" cols="30" rows="10"><?php echo $row['body']?></textarea><br/>
			CSS:<br/>
			<textarea name="data[css]" cols="30" rows="10"><?php echo $row['css']?></textarea><br/>
			<input type="submit" value="Submit!!!"/><br/>
		</form>
<?php
	} else {
		$sql = "UPDATE
					`page`
				SET
					`title` = '". $db->real_escape_string( $_POST['data']['title'] ) ."',
					`menu_title` = '". $db->real_escape_string( $_POST['data']['menu_title'] ) ."',
					`page` = '". $db->real_escape_string( $_POST['data']['page'] ) ."',
					`body`='". $db->real_escape_string( $_POST['data']['body'] ) ."',
					`css`='". $db->real_escape_string( $_POST['data']['css'] ) ."'
				WHERE
					`id` = ". (int) $_POST['data']['id'] .";";
		if ( !( $result = $db->query( $sql ) ) ) {
			die( 'Le gras c\'est la vie' );
		}
		header( 'Location: index.php' );
	}