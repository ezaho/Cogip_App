<?php
require "connection.php";
   $sqlrequest = "SELECT `id_personnes`, `prenom`, `nom`, `email`, `tel`, `id_Societe` FROM `Personnes`ORDER BY nom ASC ";
   $qp = $dbh->prepare($sqlrequest);
   $qp->execute();
   $table=$qp->fetchAll();

?>
<div class="container">
       <div align="center" class="panel panel-default">
           <div class="panel body" >
               <h3> ANNUAIRE </h3> 
              
      
  <table class="table">
    <thead>
      <tr>
        <th>id_personnes</th>
        <th>prenom</th>
       <th>nom</th>
        <th>email</th>
        <th>tel</th>
        <th>id_Societe</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($table as $value){
     
              echo "<tr>";
                echo "<td>".$value['id_personnes']."</td>";
                echo "<td>".$value['prenom']."</td>";
                echo "<td><a href=detailcontact.php?id_personnes=".$value['id_personnes'].">".$value['nom']."</a>"."</td>";
                echo "<td>".$value['email']."</td>";
                echo "<td>".$value['tel']."</td>";
                echo "<td>".$value['id_Societe']."</td>";
                
                
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
            



