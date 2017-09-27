<?php
require "connection.php";
   $sqlrequest = "SELECT  `numerofacture`, `datefacture` FROM `factures` ORDER BY id_factures DESC LIMIT 0,5  ";
 $qp = $dbh->prepare($sqlrequest);
   $qp->execute();
   $table=$qp->fetchAll();
?>

<div class="container">
       <div align="center" class="panel panel-default">
           <div class="panel body" >
               <h3> FACTURES </h3> 
              
      
  <table class="table">
    <thead>
      <tr>
        <th>N°Facture</th>
        <th>Date facturation</th>
       
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($table as $value){
     
              echo "<tr>";
                echo "<td><a href=detailfacture.php?numerofacture=".$value['numerofacture'].">".$value['numerofacture']."</a></td>";
                echo "<td>".$value['datefacture']."</td>";
                
              echo "</tr>";
                }
     ?>
      <tr>
        <td></td>
        <td></td>
        
      </tr>      
      <tr class="">
        <td></td>
        <td></td>
        
     </tr>
    </tbody>
  </table>
        </div>
       </div>
  </div>
            
