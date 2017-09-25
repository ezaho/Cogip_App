<?php
try {//nom du PDO
 
  $dbh = new PDO('mysql:host=localhost;dbname=comptabilite', 'root', 'user');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
// print_r($_POST);
   $sqlrequest = "SELECT date_facture FROM facture ORDER BY id DESC LIMIT 0,5";

?>

<div class="container">
       <div align="center" class="panel panel-default">
           <div class="panel body" >
               <h3> FACTURES </h3> 
              
            </div>
       </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>N°Facture</th>
        <th>Date facturation</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        
      </tr>      
      <tr class="">
        <td></td>
        <td></td>
        
      </tr>
      <tr class="">
        <td></td>
        <td></td>
       
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        
      </tr>
      <tr class="">
        <td></td>
        <td></td>
       
      </tr>
    </tbody>
  </table>
            
