<html>
<head>
	<title>Online Examination</title>
	<style type="text/css">
		#style2{
			font-family: georgia;
			font-size: 15px;
			border: 2px solid black;
			width: 480px;
			margin-left: 214px;
			padding-top: 17px;
		}
	</style>
</head>

<body style = 'background-color:darkgray;'>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<div class = 'container'>
		<div class = 'row'>
			<div class = 'span12'>
				<div class = 'well' style = 'margin-top:30px;'>
					<div class = "brand">
						<center><h2>Exam Web App</h2></center><br><br>
						<div style = 'text-align:center;'>
							<form method = "POST" action = "select.php">
								Username:<input type = 'email' name = 'uname'>
								Password:<input type = 'password' name = 'pass'>
								<button  class = "btn btn-primary">Login</button>
							</form>
								<div id = "style2">
									<form method = 'POST' action = 'insert.php'>
										Fname<input type = 'text' name = 'fname'><br>
										Lname<input type = 'text' name = 'lname'><br>
										Username:<input type = 'email' name = 'uname'><br>
										Password:<input type = 'password' name = 'pass'><br>
										<button class = "btn btn-primary">Submit</button>
									</form>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>