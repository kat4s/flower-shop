<!DOCTYPE html>

<html lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Logowanie</title>
	
	<link href="css/floating-labels.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/moj_css.css">
	
	<link href="https://fonts.googleapis.com/css?family=Kalam:400,700&display=swap&subset=latin-ext" rel="stylesheet"> 
</head>
<body>

<?php include "header.php";?>

<form action="loguj.php" method="post" class="form-signin">
  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">Logowanie</h1>
  </div>

  <div class="form-label-group">
    <input type="email" name="login" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="inputEmail">Adres email</label>
  </div>

  <div class="form-label-group">
    <input type="password" name="haslo" id="inputPassword" class="form-control" placeholder="Password" required="">
    <label for="inputPassword">Haslo</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj</button>
  <p class="mt-5 mb-3 text-muted text-center">© 2024</p>
</form>
</body>