<?php
	
    $db = new mysqli( 'localhost' , 'root', 'root' , 'CMS' );
	if( $db->connect_errno ){
		die( $db->connect_error );
	}