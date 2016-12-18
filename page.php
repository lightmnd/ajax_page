<?php

if(isset($_GET["page"])) {
	$page = trim($_GET['page']);
	$allowed = array('home', 'tutorial', 'contact');

	if(in_array($page, $allowed)){
		echo file_get_contents("pages/{$page}.html");
	}
}

?>