<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: login.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli("localhost", "kot", "tok", "kwiaciarnia");
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
	/*tu koncze*/
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkownicy WHERE user_='%s'",
		mysqli_real_escape_string($polaczenie,$login))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();
				
				if (password_verify($haslo, $wiersz['pass']))
				{
					$_SESSION['zalogowany'] = true;
					$_SESSION['iduzytkownicy'] = $wiersz['iduzytkownicy'];
					$_SESSION['user_'] = $wiersz['user_'];
					$_SESSION['email'] = $wiersz['email'];
					$_SESSION['imie'] = $wiersz['imie'];
					$_SESSION['nazwisko'] = $wiersz['nazwisko'];
					$_SESSION['kraj'] = $wiersz['kraj'];
					$_SESSION['miejscowosc'] = $wiersz['miejscowosc'];
					
					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: mojProfil.php');
				}
				else 
				{
					$_SESSION['blad'] = '<p style="color:red">Nieprawidłowy login lub hasło!</p>';
					header('Location: index.php');
				}
				
			} 
			else 
			{
				
				$_SESSION['blad'] = '<p style="color:red">Nieprawidłowy login lub hasło!</p>';
				header('Location: index.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>