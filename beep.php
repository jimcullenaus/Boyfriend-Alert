<?php
	require_once("configsecrets.php");
	echo $_GET['key'];
	if($_GET['key'] == $key){
		// Run in bg so page doesn't take forever to load
		shell_exec("sudo ./run.py >/dev/null 2>/dev/null &");
	}
?>
