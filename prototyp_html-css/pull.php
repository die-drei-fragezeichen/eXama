<?php

	if($_POST['payload']){
		shell_exec('cd /var/www/exama.ch/eXama/ && sudo git pull');
	}

?>
