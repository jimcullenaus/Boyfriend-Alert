<link rel="apple-touch-icon" sizes="any" href="batsig.png">
<?php
	require_once("configsecrets.php");
	$key = $_GET['key'];
	$res = file_get_contents("http://{$domain}/beep.php?key=$key");	
?>
	<div id="here"></div>
	<script>
	var i = 0;
	var txt = 'Alerting Justin...\nFinished!'; /* The text */
	var speed = 100; /* The speed/duration of the effect in milliseconds */

	function typeWriter() {
		  if (i < txt.length) {
			      document.getElementById("here").innerHTML += txt.charAt(i);
			          i++;
			          setTimeout(typeWriter, speed);
		  }
		  else{
			window.location = "http://google.com";
		  }
	}

	typeWriter();
	</script>
