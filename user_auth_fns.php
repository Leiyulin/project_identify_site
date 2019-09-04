<?php  
function register($username,$email,$password){
	$conn = db_connect();

	$result = $conn->query("select * from authorized_users where name='".$username."'");
	#echo $result;
	if (!$result) {
		throw new Exception("could not exe query!");
	}
	if ($result->num_rows>0) {
		throw new Exception("username is taken,choose another one!");		
	}
	$result =$conn->query("insert into authorized_users values('".$username."',sha1('".$password."'))");
	#echo $result;

	if (!$result) {
		throw new Exception("could not write in database");
	}
	return true;

}

function db_connect(){
	$result = new mysqli('localhost','root','','auth');
	if (!$result) {
		throw new Exception("could not connect to database");
	} else {
		return $result;
	}
}

function login($name,$password){
	$conn = db_connect();
	$result = $conn->query("select * from authorized_users where name='".$name."' and password = sha1('".$password."')");
	if (!$result) {
		throw new Exception("could not login you!");
	}
	if ($result->num_rows>0) {
		return true;
	}else {
		throw new Exception("could not login you");
		
	}
}

function check_valid_user(){
	if (isset($_SESSION['valid_user'])) {
		echo "logged in as ".$_SESSION['valid_user']."<br/>";
	}else{
		do_html_header('Problem:user_auth_fns');
		echo "you are not logged in. <br/>";
		do_html_url('login.php','login');
		do_html_footer();
		exit;
	}
}
?>