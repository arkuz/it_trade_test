<?php
	echo '<meta http-equiv="content-type" content="text/html; charset=UTF-8" />';
	if(!empty($_REQUEST)){
		foreach ($_REQUEST as $key => $value) {
			echo "$key: $value <br>";
		}
	} else echo '$_REQUEST is empty';
