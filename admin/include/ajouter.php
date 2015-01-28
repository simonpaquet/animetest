<?php
	if( count( $_POST ) == 0 ) {
		?>
		<form action="index.php" method="post">
			<input type="hidden" name="page" value="ajouter"/>
			Title:<br/>
			<input type="text" name="data[title]" value=""/><br/>
			Menu Title:<br/>
			<input type="text" name="data[menu_title]" value=""/><br/>
			Page:<br/>
			<input type="text" name="data[page]" value=""/><br/>
			Body:<br/>
			<textarea name="data[body]" cols="80" rows="20"></textarea><br/>
			CSS:<br/>
			<textarea name="data[css]" cols="30" rows="10"></textarea><br/>
			<input type="submit" value="Submit!!!"/><br/>
		</form>
	<?php
	} else {
		$sql = "INSERT INTO
					`page`
				(
					`title`,
					`menu_title`,
					`page`,
					`body`,
					`css`
				) VALUES (
					'". $db->real_escape_string( $_POST['data']['title'] ) ."',
					'". $db->real_escape_string( $_POST['data']['menu_title'] ) ."',
					'". $db->real_escape_string( $_POST['data']['page'] ) ."',
					'". $db->real_escape_string( $_POST['data']['body'] ) ."',
					'". $db->real_escape_string( $_POST['data']['css'] ) ."'
				)";
		if ( !( $result = $db->query( $sql ) ) ) {
			die( 'J\'apprecie les fruits en sirop' );
		}
		header( 'Location: index.php' );
	}