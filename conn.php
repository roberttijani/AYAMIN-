<?php
	$db_conf = [
				"host"	=> "localhost",
				"user"	=> "root",
				"pass"	=> "",
				"db"	=> "peternakan"];
				
	$link = new mysqli($db_conf['host'], $db_conf['user'], $db_conf['pass'], $db_conf['db']);
?>