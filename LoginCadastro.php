<?php
    session_start();
    if(isset($_SESSION['username'])){
      header('Location: PosLogin.php');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
	<title>Login/Cadastro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		body {
			padding-top: 90px;
		}

		.panel-login {
			border-color: #ccc;
			-webkit-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
			-moz-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
			box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
		}

		.panel-login>.panel-heading {
			color: #00415d;
			background-color: #fff;
			border-color: #fff;
			text-align: center;
		}

		.panel-login>.panel-heading a {
			text-decoration: none;
			color: #666;
			font-weight: bold;
			font-size: 15px;
			-webkit-transition: all 0.1s linear;
			-moz-transition: all 0.1s linear;
			transition: all 0.1s linear;
		}

		.panel-login>.panel-heading a.active {
			color: #029f5b;
			font-size: 18px;
		}

		.panel-login>.panel-heading hr {
			margin-top: 10px;
			margin-bottom: 0px;
			clear: both;
			border: 0;
			height: 1px;
			background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
			background-image: -moz-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
			background-image: -ms-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
			background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
		}

		.panel-login input[type="text"],
		.panel-login input[type="email"],
		.panel-login input[type="password"] {
			height: 45px;
			border: 1px solid #ddd;
			font-size: 16px;
			-webkit-transition: all 0.1s linear;
			-moz-transition: all 0.1s linear;
			transition: all 0.1s linear;
		}

		.panel-login input:hover,
		.panel-login input:focus {
			outline: none;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
			border-color: #ccc;
		}

		.btn-login {
			background-color: #7971ea;
			outline: none;
			color: #fff;
			font-size: 14px;
			height: auto;
			font-weight: normal;
			padding: 14px 0;
			text-transform: uppercase;
			border-color: #7971ea;
		}

		.btn-login:hover,
		.btn-login:focus {
			color: #fff;
			background-color: #0d0cb5;
			border-color: #0d0cb5;
		}

		.forgot-password {
			text-decoration: underline;
			color: #888;
		}

		.forgot-password:hover,
		.forgot-password:focus {
			text-decoration: underline;
			color: #666;
		}

		.btn-register {
			background-color: #7971ea;
			outline: none;
			color: #fff;
			font-size: 14px;
			height: auto;
			font-weight: normal;
			padding: 14px 0;
			text-transform: uppercase;
			border-color: #7971ea;
		}

		.btn-register:hover,
		.btn-register:focus {
			color: #fff;
			background-color: #0d0cb5;
			border-color: #0d0cb5;
		}

		.form-control {
			flex-basis: 50% !important;
		}

	body{

	background-image:url('images/hero_1.jpg');
	background-size: cover;
	}


	</style>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>


	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Cadastrar</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="login.php" method="post"
									role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1"
											class="form-control" placeholder="Email" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2"
											class="form-control" placeholder="Senha">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Lembre-se de mim</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4"
													class="form-control btn btn-login" value="Login">
											</div>
										</div>
									</div>
								</form>

								<form id="register-form" action="formCadastro.php" method="post"
									role="form" style="display: none;">
									<div class="form-group col-md-12">
										<input type="text" name="username" id="username" tabindex="1"
											class="form-control" placeholder="Nome da instituição" value="">
									</div>
									<div class="form-group col-md-12">
										<input type="email" name="email" id="email" tabindex="1" class="form-control"
											placeholder="Email" value="">
									</div>
									<div class="form-group col-md-12">
										<input type="password" name="password" id="password" tabindex="2"
											class="form-control" placeholder="Senha">
									</div>
									<div class="form-group col-md-12">
										<input type="password" name="confirm-password" id="confirm-password"
											tabindex="2" class="form-control" placeholder="Confirmar senha">
									</div>
									<div class="form-group col-md-12">
										<input type="text" name="cnpj" id="cnpj" tabindex="2" class="form-control"
											placeholder="CNPJ">
									</div>
									<div class="form-group col-md-8">
										<input type="text" name="rua" id="rua" tabindex="2" class="form-control"
											placeholder="Rua">
									</div>
									<div class="form-group col-md-4">
										<input type="text" name="cep" id="cep" tabindex="2" class="form-control"
											placeholder="CEP">
									</div>
									<div class="form-group col-md-8">
                                        <input type="text" name="cidade" id="cidade" tabindex="2" class="form-control"
                                            placeholder="Cidade">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="text" name="estado" id="estado" tabindex="2" class="form-control"
                                            placeholder="Estado">
									</div>

									<div class="form-group col-md-4">
										<input type="text" name="telefone" id="telefone" tabindex="2" class="form-control"
											placeholder="Telefone">
									</div>
									
									<div class="form-group col-md-8">
										<input type="text" name="razao" id="razao" tabindex="2" class="form-control"
											placeholder="Razão">
									</div>
									




									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit"
													tabindex="4" class="form-control btn btn-register"
													value="Cadastre-se">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(function () {
						console.log(location.search);
						debugger;
			if(location.search.includes("cad")){

				$('#login-form-link').removeClass('active');
				$('#login-form').hide();
				$('#register-form-link').addClass('active');
				$('#register-form').show();
			}
			else{
				$('#register-form-link').removeClass('active');
				$('#register-form').hide();
				$('#login-form-link').addClass('active');
				$('#login-form').show();
			}

			$('#login-form-link').click(function (e) {
				$("#login-form").delay(100).fadeIn(100);
				$("#register-form").fadeOut(100);
				$('#register-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});

			$('#register-form-link').click(function (e) {
				$("#register-form").delay(100).fadeIn(100);
				$("#login-form").fadeOut(100);
				$('#login-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
			if(location.search.includes("cadastrado")){
				alert('Usuario Cadastrado com Sucesso');

			}
		});

	</script>
</body>

</html>