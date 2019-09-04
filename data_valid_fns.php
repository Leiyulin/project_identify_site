<?php  
function filled_out($form_vars){
	foreach ($form_vars as $key => $value) {
		if ((!isset($key))||($value=='')) {
			return false;
		}
	}
	return true;
}

function valid_email($email_var){
	if (preg_match('/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9_\.\-]+\.[a-zA-Z0-9_\.\-]+$/', $email_var)) {
		return true;
	}else{
		return false;
	}
}
?>