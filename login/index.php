<?php 
	include_once('config.php');
    if (isset($_POST ["username"]) && (isset($_POST["password"]))){
        $pass = $_POST["password"];
        $usern = $_POST["username"];

		$sql = "SELECT login_id FROM knife_login WHERE username = '$usern' AND pass = '$pass'";
		
		$result = $conn->query($sql);
        if ($result->num_rows == 1) {
			while($row = $result->fetch_assoc()) {
				$login_id = $row['login_id'];

				//setting cookie
				$cookie_value = md5("AmiRakibBolchi") . $login_id . md5("SobThikA6e");
				$cookie_name = "logged_in_user";
				setcookie($cookie_name, $cookie_value, time() + (3000), "/"); // 86400 = 1 day
			}
			header("Location: http://localhost/portfolio/login/dashboard.php");
        }else{
			header("Location: http://localhost/portfolio/login");
		}
    }
?>

<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
		integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!--Custom styles-->
	<link rel="stylesheet" href="../css/style.css">
	<!-- jquery js -->
	<script src="../js/jquery-3.4.1.slim.min.js"></script>
	<!-- bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container text-center">
		<div class="login-box">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
				</div>
				<div class="card-body">
					<form method="POST" action="">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="username" name="username">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="password" name="password">
						</div>
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-right login_btn">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>