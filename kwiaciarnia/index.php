<!DOCTYPE html>

<html lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Kwiaciarnia</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/moj_css.css">
	
	<link href="https://fonts.googleapis.com/css?family=Kalam:400,700&display=swap&subset=latin-ext" rel="stylesheet"> 
</head>
<body> 

<?php include "header.php";?>

<main role="main">
<h2>j</h2>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="zdj/logo.jpg" width="100%" height="100%">

      </div>
      <div class="carousel-item">
        <img src="zdj/słoneczniki.jpg" width="100%" height="100%">
      </div>
      <div class="carousel-item">
        <img src="zdj/dostawa.jpg" width="100%" height="100%">
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="container">
	<h1>Polecane</h1>
<?php
$servername = "localhost";
$username = "user";
$password = "password";
$baza = "kwiaciarnia";

$polaczenie = mysqli_connect($servername, $username, $password, $baza);
mysqli_set_charset($polaczenie, "utf8");

if (!$polaczenie) {
    die("Blad połączenia " . mysqli_connect_error());
}

$zap = "select * from produkty;";

$wynik = mysqli_query($polaczenie, $zap);

if(mysqli_num_rows($wynik)>0)
{
	echo '<div class="row mb-2">';
	while($rekord = mysqli_fetch_assoc($wynik))
	{
		?>
		
		<div class="col-md-4">
		  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
			<a href="#" class="obrazekHref"><div class="col p-1 d-flex flex-column position-static">
				<img class="obrazekLink" src="zdj/<?php echo $rekord['zdjecie'];?>" width="100%">
				<div class="NapObrazekLink"><h1 class="mb-0"><?php echo $rekord['nazwa'] ?></h1></div>
				<div class="CenObrazekLink"><h4 class="mb-0">Cena: <?php echo $rekord['cena'] ?> zł</h4></div>
			</div></a>
		  </div>
		</div>
		
		<?php
	}
	echo '</div>';
}

mysqli_close($polaczenie);
?>

</div>
 
</main>
  <script src="css/jquery-3.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="css/bootstrap.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>
</html>