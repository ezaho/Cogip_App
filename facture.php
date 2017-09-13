<?php
try {//nom du PDO
  $dbh
  $dbh = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'user');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
print_r($_POST);
   $sqlrequest = "SELECT date_facture FROM facture ORDER BY id DESC LIMIT 0,5";

?>