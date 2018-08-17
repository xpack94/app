
<?php
session_start();
if(!isset($_SESSION["username"])) { 
    header("location:login.html");
    exit();
}else{

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="home.css">
    </head>
    <body>
    
    <?php
    include("navbar.php");    
    ?> 
    <div class="container">
        <div class="jumbotron container-fluid">
          
        
          
           <p>bienvenue dans votre espace personnel <?php  echo $_SESSION["prenom"]." ".$_SESSION["nom"]  ?></p>
             <?php
                if($_SESSION["gestionnaire"]==1){?>
                    <a href="disponibilit%C3%A9s.php">Disponibilités des terrains</a><br/>
                     <a href="listeDesReservations.php">histoqiue des Reservations</a><br/>
                     <a href="reservation.php">faire une reservation de terrain</a><br/>
                    <a href="listJoueurs.php">liste des joueur</a><br/>
                    <a href="listTerrainReserve.php">liste des terrains reservé</a><br/>
                    <a href="listeTerrainDispo.php">liste des terrains disponible</a><br/>
                    
                    <?php
                }else{
                    ?>
                    <a href="disponibilit%C3%A9s.php">Disponibilités des terrains</a><br/>
                     <a href="listeDesReservations.php">histoqiue des Reservations</a><br/>
                      <a href="reservation.php">faire une reservation de terrain</a><br/>
                   <?php
                    }
                    ?>
              
            
        
        
        </div>  
    </div>
        
        
        
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    </body>
</html>
