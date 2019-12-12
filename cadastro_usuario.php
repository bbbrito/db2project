<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>



<!DOCTYPE html>
<html lang = "pt-br">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
    <meta charset="utf-8"/>
	<title>Cadastro de Livros</title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
</head>

<body>

<div class="container">
    <h1><img src="img/impressao.png" heigth="50" width="50"> Cadastro de Livros</h1>
    <div class="panel panel-primary">
    <div class="panel-heading"><strong>Login e Cadastro de Usuário</strong></div>
    <div class="container">
		<div class="col-md-4 col-md-offset-3" align="center">
				<div class="panel panel-login">
                    <div class="col-md-12 col-md-offset-2" align="center">
					<div class="panel-body">
						<div class="row">
							<form id="register-form" action="registrar.php" method="post" role="form">
								<div class="form-group">
									<input type="text" name="usuario" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
								</div>
								<div class="form-group">
									<input type="password" name="senha" id="password" tabindex="2" class="form-control" placeholder="Password">
								</div>
								<div class="form-group">
									<input type="password" name="confirma_senha" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
								</div>
								<div class="form-group">
									<div class="row">
								<div class="col-sm-6 col-sm-offset-3">
									<button class="btn btn-success" input type="submit" name="register-submit" id="register-submit" tabindex="4" value="Register Now">Registrar</button>
								</div>
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
	</div>

    </div>       
    </div>
</div>
</body>
</html>
