<?php
	if(!empty($_REQUEST)){
		echo '<meta http-equiv="content-type" content="text/html; charset=UTF-8" />';
		foreach ($_REQUEST as $key => $value) {
			echo "$key: $value \n";
		}
	} else echo '$_REQUEST is empty';
