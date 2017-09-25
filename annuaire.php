<?php
try {//nom du PDO
  $dbh
  $dbh = new PDO('mysql:host=localhost;dbname=CogipApp', 'root', 'user');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
print_r($_POST);
   $sqlrequest = "SELECT date_facture FROM personne ORDER BY id DESC LIMIT 0,5";

?>

<!DOCTYPE html>
<html>
<head>
	 <head>
       <title>App de Ranu</title>
       <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       
  </head>
</head>
<body>
<header>
    <div>
    	<h1>App de Ranu</h1>
    	
    	<nav class="navbar navbar-default">
     <div class="container-fluid">
       <ul class="nav navbar-nav">
            <li><a href="home.php">HOME</a></li>
            <li><a href="clients.php">LES CLIENTS</a></li>
     	      <li><a href="fournisseur.php">LES FOURNISSEURS</a></li>
            <li><a href="facture.php">FACTURES</a></li>
     	      <li><a href="detailfacture.php"> DETAILFACTURE </a></li>
     	      <li><a href="detailcontact.php">DETAILCONTACT </a></li>
     	      <li> <a href="detailsociete.php">DETAILSOCIETE</a></li>
        </ul>
      </div>
    </nav>
    </div>
    </header>
</body>
</html>