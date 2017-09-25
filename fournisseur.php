<?php  
require "connection.php";
$sqlrequest =" SELECT * FROM `Societe` WHERE id_type=1 ";
   $qp = $dbh->prepare($sqlrequest);
   $qp->execute();
   $table=$qp->fetchAll();
 ?>  
<div class="container">
       <div align="center" class="panel panel-default">
           <div class="panel body" text-align="center">
               <h3> FOURNISSEUR </h3> 
              <?php
              $affich= "<ul>";
              for ($j=0; $j <5 ; $j++) { 
                for ($i=0; $i < 7 ; $i++) { 
                $affich=$affich."<li>" . $table[$j][$i]."</li>";
              }
                $affich = $affich."</ul>"."<br>";
              }
              
               echo $affich;
              ?>
             </div>
             </div>
             </div>
             <!-- <pre> -->
             <!-- <!-- ?php --> 
                <!-- // print_r($table); -->
             <!-- ?> -->
             <!-- </pre> -->
             <table class="table">
    <thead>
      <tr>
        <th>Nom de la societe</th>
        <th>Adresse de la societe</th>
        <th>Tel</th>
        <th>Email</th>
        <th>Type</th>
        <th>compte bancaire</th>
        <th>personne contact</th>
      </tr>
    </thead>
    <tbody>
      <tr>
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
        <td></td>
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td> <td></td>
        <td></td>
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td> <td></td>
        <td></td>
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td> <td></td>
        <td></td>
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td> <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>