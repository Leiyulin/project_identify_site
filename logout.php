<?php  
	require_once('bookmark_fns.php');
	session_start();
	$old_user = $_SESSION['valid_user'];

	unset($_SESSION['valid_user']);
	$result_dest =session_destroy();

	do_html_header('logging out');
	if(!empty($old_user)){
		if ($result_dest) {
			echo "logged out already.<br/>";
			do_html_url('login.php','login');
		}else{
			echo "could not log you out:<br/>";
		}
	}else{
		echo "your were not logged in,<br/>";
		do_html_url("login.php","login");
	}
	do_html_footer();
?>