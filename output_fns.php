<html lang="en">
<head>
	<meta charset="utf-8">
	<style type="text/css">
		div.form{
			background-color: #CCCCCC;
			width: 400px;
			height: 200px;
		}
		h3.form_header{
			padding: 3px;
		}
		form{
			position: center;
		}
		html,body{
			padding:0;
			margin: 0;
			height: 100%;
		}
	</style>
</head>
<?php 
function do_html_header($title){
?>
	<title><?php echo $title; ?></title>

<body>
	<hr />
	<img src="" alt="PHPbookmark logo" border="0" align="left" valign="bottom" height="80" width="120" />
	<h1>PHPbookmark</h1>
	<hr />
<?php 
#	if ($title) {
#		do_html_heading($title);
#	}
}

function display_site_info(){
?>
<ul>
	<li>store your bm online</li>
	<li>see what other users use</li>
	<li>share your links with others</li>
</ul>
<?php 
} 
function display_login_form(){
?>

<div class="form" >
	<h3 class="form_header">login now!</h3>
	<form action="member.php" method="post" class="formmain">
		<table style="padding-left: 30px">
			<tr>
				<td>
					<label for="name">USERNAME:</label>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>
					<label for="password">PASSWORD:</label>
					<input type="password" name="password">
				</td>
			</tr>	
		</table>	
		<div align="center" style="margin-top: 10px"><input type="submit" name="LOG IN" style="width: 100px"></div>	
	</form>
	<a href="register_form.php" style="float: left;margin-left:5px">not a member yet?</a>
	<a href="#" style="float: right;margin-right:20px">Forgot password?</a>
</div>
<div class="div-push" style="height: 200px"></div>
<?php  
} 
?>

<?php  
function display_registration_form(){
?>
<div class="form" style="background-color: #00DDEE;">
	<h3 class="form_header">register now!</h3>
	<form action="register_new.php" method="post" class="formmain">
		<table style="padding-left: 30px">
			<tr>
				<td>
					<label for="name">USERNAME:</label>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>
					<label for="password">PASSWORD:</label>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					<label for="ensure">PASSWORD AGAIN:</label>
					<input type="password" name="ensure">
				</td>
			</tr>
			<tr>
				<td>
					<label for="email">EMAIL:</label>
					<input type="email" name="email">
				</td>
			</tr>	
		</table>	
		<div align="center" style="margin-top: 10px"><input type="submit" name="register" value="register" style="width: 100px"></div>	
	</form>
	<!--<a href="register_form.php" style="float: left;margin-left:5px">not a member yet?</a>
	<a href="#" style="float: right;margin-right:20px">Forgot password?</a>-->
</div>
<div class="div-push" style="height: 200px"></div>
<?php
}
?>

<?php
function display_changepw_form(){
?>
<div class="form" style="background-color: #AADDEE;">
	<h3 class="form_header">CHANGE PASSWORD</h3>
	<form action="change_passwd.php" method="post" class="formmain">
		<table style="padding-left: 30px">
			<tr>
				<td>
					<label for="name">USERNAME:</label>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>
					<label for="password">PASSWORD:</label>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					<label for="ensure">PASSWORD AGAIN:</label>
					<input type="password" name="ensure">
				</td>
			</tr>
			<tr>
				<td>
					<label for="email">EMAIL:</label>
					<input type="email" name="email">
				</td>
			</tr>	
		</table>	
		<div align="center" style="margin-top: 10px"><input type="submit" name="register" value="register" style="width: 100px"></div>	
	</form>
	<!--<a href="register_form.php" style="float: left;margin-left:5px">not a member yet?</a>
	<a href="#" style="float: right;margin-right:20px">Forgot password?</a>-->
</div>
<div class="div-push" style="height: 200px"></div>

<?php 
}

function do_html_url($dst,$title){
	echo "<a href='".$dst."'>".$title."</a>";
}

function display_user_menu(){
?>
<hr>
<a href="#" style="text-decoration: unset;">HOME</a>
|
<a href="#" style="text-decoration: unset;">ADD BM</a>
|
<a href="#" style="text-decoration: unset;">DELETE BM</a>
|
<a href="change_passwd_form.php" style="text-decoration: unset;">CHANGE PASSWORD</a>
|
<a href="#" style="text-decoration: unset;">RECOMMEND URL</a>
|
<a href="logout.php" style="text-decoration: unset;">LOG OUT</a>
|

<?php
}

function display_user_urls($url_array){
?>
<ul>
<?php
while($row = mysqli_fetch_array($url_array)){
?>
	<li><?php echo "<a href='".$row['bm_url']."'>".$row['bm_url']."</a>" ?></li>
<?php
}
?>
</ul>
<?php
}

function do_html_footer(){
?>
	<!-- footer -->
	<div >
		<hr>
		<table  width="100%" cellpadding="0" cellspace="0" border="0" bgcolor="#BBBBBB" >
			<tr>
				<td>
					<p class="foot">&copy; lyl Ltd.</p>
					<p class="foot">Please connect us:
						<a href="https://www.cnblogs.com/leiyulin/">legal inform page</a></p>
				</td>
				<td></td>
			</tr>
		</table>
	</div>
</body>
</html>	
<?php
}
#do_html_header("ddd");
#display_site_info();
#display_login_form();
#do_html_footer();
?>