<?php
	if(!empty($_REQUEST)){
		foreach ($_REQUEST as $key => $value) {
			echo "$key: $value \n";
		}
	} else echo '$_REQUEST is empty';
