<?php  
	require_once("bookmark_fns.php");

	$name = $_POST['name'];
	$password = $_POST['password'];
	$ensure = $_POST['ensure'];
	$email = $_POST['email'];

	session_start();	
	try{
		if (!filled_out($_POST)) {
			throw new Exception('fill out the form!');
		}
		if(!valid_email($email)){
			throw new Exception("misformed email!");
		}
		if ($password!=$ensure) {
			throw new Exception("inputed password mismatched!");	
		}
		if ((strlen($password)<6)||(strlen($password)>16)) {
			throw new Exception("password too simple!");
		}
		$query = register($name,$email,$password);
		echo $query;
		$_SESSION['valid_user']=$name;

		do_html_header('Registration successful!');
		echo "registered successful,go member page";

?>
	<form action="member.php" method="post">
		<input type="hidden" name="name" value="<?php $name?>">
		<input type="hidden" name="password" value="<?php $password?>">
		<input type="submit" name="" value="<?php do_html_url('member.php','go to member page');?>">
	</form>
<?php
		
		do_html_footer();
	}
	catch (Exception $e){
		do_html_header('Problem:');
		echo $e->getMessage();
		do_html_footer();
		exit;
	}
?>