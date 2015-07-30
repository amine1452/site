<?php 
require("includes/config.inc.php");
include("includes/header.inc.php"); 
include("includes/fonctions.inc.php"); 
?>
   
        <div class="row">
        <table style="width:100%;">
            <thead>
                <tr>
                    <th>Civilité</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
        <tbody style="text-align:center;">
        <?php 
          echo listingAdherents($conn);
        ?>
        </tbody>
        </table>
        </div>
<?php include("includes/footer.inc.php") ;?>
