
<?php
session_start();
if(!isset($_SESSION["username"])) {
   
    header("location:login.html");
}else{
     echo $_SESSION["username"];
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
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown" style="flex-direction: row-reverse;">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Disponibilités</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">déconnexion</a>
          </li>
          
        </ul>
      </div>
      </div>
    </nav>  
    <div class="container">
        <div class="jumbotron container-fluid">
          
           <p>bienvenue dans votre espace personnel <?php  echo $_SESSION["prenom"]." ".$_SESSION["nom"]  ?></p>
        
        
        </div>  
    </div>
        
        
        
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    </body>
</html>