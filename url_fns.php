<?php  
function get_user_urls($sess_var){
	$conn_bm = db_connect();

	$result = $conn_bm->query("select * from bookmark where user='".$sess_var."'");
	if (!$result) {
		throw new Exception("user".$sess_var."has no bookmark!");
	} else{
		return $result;
	}
}
?>