<?php  
require "connection.php";
$sqlrequest =" SELECT `id_Societe`, `nom`, `adresse`, `tel`, `tva`, `id_type`, `compte bancaire`, `personne contact` FROM `Societe`  WHERE id_type=1 ";
   $qp = $dbh->prepare($sqlrequest);
   $qp->execute();
   $table=$qp->fetchAll();
 ?>  
<div class="container">
       <div align="center" class="panel panel-default">
           <div class="panel body" text-align="center">
               <h3> FOURNISSEUR </h3>               
             <table class="table">
    <thead>
      <tr>
        <th>Nom de la societe</th>
        <th>Adresse de la societe</th>
        <th>Tel</th>
        <th>Type</th>
        <th>TVA</th>
        <th>compte bancaire</th>
        <th>personne contact</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($table as $value){
     
              echo "<tr>";
                echo "<td><a href=detailsociete.php?fournisseur=".$value['id_Societe'].">".$value['nom']."</a></td>";
                echo "<td>".$value['adresse']."</td>";
                echo "<td>".$value['tel']."</td>";
                echo "<td>".$value['tva']."</td>";
                echo "<td>".$value['id_type']."</td>";
                echo "<td>".$value['compte bancaire']."</td>";
                echo "<td>".$value['personne contact']."</td>";
              echo "</tr>";
                }
     ?>
      
      <tr class="">
        <td></td>
        <td></td>
        <td></td>
         <td></td>
        <td></td>
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td> 
        <td></td>
      </tr>
      
     </div>
             </div>
             </div>
    </tbody>
  </table>