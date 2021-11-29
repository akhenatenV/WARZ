<?php
require '_INIT/core.php';

if(isset($_SESSION['username'])){ ## CHECKING TO SEE IF THE USER IS ALREADY
	header('Location: home.php'); ## LOGGED IN OR NOT
	exit();
}

if(isset($_POST['action'])){
	$action = $_POST['action'];
}elseif(isset($_GET['action'])){
	$action = $_GET['action'];
}else{
	$action = "index.php";
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Warz</title>
		<meta charset="utf-8">
		<!-- BOOTSTRAP -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<!-- STYLE SHEET -->
		<link rel="stylesheet" type="text/css" href="_CSS/index.css?v=0.03">
	</head>
	<body>
		<div id="wrapper">
			<div id="login_container" class="col">
				<div class="row">
					<div class="col col-lg-4 col-md-12 col-sm-12">
						<div class="container-fluid">
							<nav class="navbar navbar-expand-lg navbar-light">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a href="index.php?page=login" class="nav-link">Login</a>
									</li>
									<li class="nav-item">
										<a href="index.php?page=register" class="nav-link">Register</a>
									</li>
								</ul>
							</nav>
						</div>

						<div class="login_section">
							<?php
							$page = 'Login';
							if(isset($_POST['Login'])){
								$page = 'Login';
							}elseif(isset($_POST['Register'])){
								$page = 'Register';
							}else{
								$page = 'Login';
							}

							switch($action){
								case 'Login':
								require_once '_DBCON/dbcon.php';
									if($_SERVER['REQUEST_METHOD'] == 'POST'){
										if(!empty($_POST['login_username'])){
											$u = mysqli_real_escape_string($dbcon, strip_tags(trim($_POST['login_username'])));
										}else{
											$u = false;
											echo "<span align='center' class='error'>-You forgot to enter your username.<br></p>";
										}
										if(!empty($_POST['login_password'])){
											$p = mysqli_real_escape_string($dbcon, strip_tags(trim($_POST['login_password'])));
										}else{
											$p = false;
											echo "<span align='center' class='error'>-You forgot to enter your password.<br></p>";
										}

										if($u && $p){

											$q = "SELECT user_id, username, email, accept FROM uc_users_81220 WHERE (username='$u' AND password=SHA1('$p'))";
											$result = @mysqli_query($dbcon, $q);
											if(@mysqli_num_rows($result) == 1){
												session_start();
												$_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
												$_SESSION['user_id'] = (int) $_SESSION['user_id'];
												header('Location: home.php');
												exit();
												mysqli_free_result($result);
												mysqli_close($dbcon);
											}else{
												echo ''; // EMAIL ADDRESS OR USERNAME WAS WRONG
												echo "<span class='error'>The Username, Password Combination Is Wrong</span>";
												echo '<p class="error"><a href="#" onclick="openForgotPassword()" class="forgot-password">Forgot Password?</a></span>';
											}
										}else{
											echo ''; // TRY AGAIN
										}
										mysqli_close($dbcon);
									}
								break;
							}

							switch($action){
								case 'Register':
									require_once('_DBCON/dbcon.php');
									if($_SERVER['REQUEST_METHOD'] == 'POST'){
										$register_errors = array();

										if(!empty($_POST['username'])){
											$username = mysqli_real_escape_string($dbcon, strip_tags(trim($_POST['username'])));
										}else{
											$register_errors[] = "You didn't enter a username";
										}
										if(!empty($_POST['email'])){
											$email = mysqli_real_escape_string($dbcon, strip_tags(trim($_POST['email'])));
										}else{
											$register_errors[] = "You didn't enter a email";
										}
										if($_POST['password'] != $_POST['password2']){
											$register_errors[] = "Your passwords dont match";
										}elseif(empty($_POST['password']) || empty($_POST['password2'])){
											$register_errors[] = "You forgot your password";
										}else{
											$password = mysqli_real_escape_string($dbcon, strip_tags(trim($_POST['password'])));
										}

										if(empty($register_errors)){
											$q = "INSERT INTO uc_users_81220 (user_id, username, email, password, date_registered, accept) 
																		VALUES ('', '".$username."', '".$email."', '".SHA1($password)."', NOW(), '1')";
											$result = @mysqli_query($dbcon, $q);
											if($result){
												header('Location: index.php');
												exit();
											}else{
												echo mysqli_error($result).$q;
											}
										}else{
											foreach($register_errors as $err){
												echo "<p class='error'>-$err</p>";
											}
										}
									}else{
										echo 'ERROR';
									}
								break;
							}
							
							@$page = $_GET['page'];
							if($page == 'login'){
								echo '
								<table width="100%" cellpadding="0" cellspacing="0">
									<form method="post" action="">
									<tr>
										<td>
											<h3>Login</h3>
										</td>
									</tr>
									<tr>
										<td>
											<span class="login_titles">Username</span>
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" name="login_username" class="user_inputs" placeholder="Username...">
										</td>
									</tr>
									<tr>
										<td>
											<span class="login_titles">Password</span>
										</td>
									</tr>
									<tr>
										<td>
											<input type="password" name="login_password" class="user_inputs" placeholder="Password...">
										</td>
									</tr>
									<tr><td></td></tr>
									<tr>
										<td>
											<input type="submit" name="action" class="login_btn" value="Login">
										</td>
									</tr>
									</form>
								</table>
								';
							}elseif($page == 'register'){
								echo '
								<table>
									<form method="post" action="">
									<tr>
										<td>
											<h3 style="margin-top:0px;padding-top:0px;color:#fff;">Register</h3>
										</td>
									</tr>
									<tr>
										<td>
											Username: 
										</td>
										<td>
											<input type="text" name="username" class="user-inputs" placeholder="Username...">
										</td>
									</tr>
									<tr>
										<td>
											Email:
										</td>
										<td>
											<input type="text" name="email" class="user-inputs" placeholder="Email...">
										</td>
									</tr>
									<tr>
										<td>
											Password: 
										</td>
										<td>
											<input type="password" name="password" class="user-inputs" placeholder="Password...">
										</td>
									</tr>
									<tr>
										<td>
											Re-Type Password: 
										</td>
										<td>
											<input type="password" name="password2" class="user-inputs" placeholder="Password...">
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<input type="submit" name="action" class="register_user_btn" id="register_user" value="Register">
										</td>
									</tr>
									</form>
								</table>
								';
							}else{
								echo '
									<h2>Welcome to Warz&trade;</h2>
									<p>
										lorem epsom delore lorem epsom delore lorem epsom delore lorem epsom delore lorem epsom delore lorem epsom delore 
									</p>
								';
							}
							?>
						</div>
					</div>

					<div class="header_image col col-lg-8 col-md-12 col-sm-12">
						<img src="https://image.shutterstock.com/image-photo/cool-mafia-gangster-gun-sitting-600w-560267707.jpg" width="100%" height="100%">
					</div>
				</div>
			</div>

			<div id="footer">
				<footer class="row">
					<div class="col col-lg-12">
						Warz&trade; | <?php echo date('Y'); ?>
					</div>
					<div class="row">
						<div class="col col-lg-12">
							<a href="" class="nav-link">Contact Us</a>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</body>
</html>