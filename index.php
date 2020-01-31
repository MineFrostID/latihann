<?php

	ob_start();
	include ("template.php");
	$template = ob_get_clean();



	$nama="ahay";
	printf($template,$nama);





?>