<?php  
	require_once('bookmark_fns.php');
	session_start();

	$name = $_POST['name'];
	$password = $_POST['password'];

	if ($name && $password) {
		try {
			login($name,$password);
			$_SESSION['valid_user'] = $name;
		} catch (Exception $e) {
			do_html_header('PROBLEM:');
			echo "error login!<br/>";
			do_html_url('login.php','LOGIN');
			do_html_footer();
			exit;
		}
	}
	do_html_header('HOME');
	check_valid_user();
	if ($url_array = get_user_urls($_SESSION['valid_user'])) {
		display_user_urls($url_array);
	}

	display_user_menu();
	do_html_footer();
?>