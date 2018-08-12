<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if(!isset($_SESSION["username"])) {
   
    header("location:login.html");
}else{
     echo $_SESSION["username"];
}
?>
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="home.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<?php
    include("navbar.php");
?>

   <div class="container">
        <div class="jumbotron container-fluid">
           <h2>liste des terrains reservé dans la journée en cours</h2>
           <div class="form-group">
            <form class="signup"  action="listTerrainReserve.php" method="post" >
                <div class="form-group">
                    <label>Heure de debut</label>
                    <select name="debut">
                         <option value='06'>06h</option> 
                            <option value='07'>07h</option> 
                            <option value='08'>08h</option> 
                            <option value='09'>09h</option> 
                            <option value='10'>10h</option> 
                            <option value='11'>11h</option> 
                            <option value='12'>12h</option> 
                            <option value='13'>13h</option> 
                            <option value='14'>14h</option> 
                            <option value='15'>15h</option> 
                            <option value='16'>16h</option> 
                            <option value='17'>17h</option> 
                            <option value='18'>18h</option> 
                            <option value='19'>19h</option> 
                            <option value='20'>20h</option> 
                    </select>
                   
                    <label>Heure de debut</label>
                    <select name="fin">
                      <option value='07'>07h</option> 
                            <option value='08'>08h</option> 
                            <option value='09'>09h</option> 
                            <option value='10'>10h</option> 
                            <option value='11'>11h</option> 
                            <option value='12'>12h</option> 
                            <option value='13'>13h</option> 
                            <option value='14'>14h</option> 
                            <option value='15'>15h</option> 
                            <option value='16'>16h</option> 
                            <option value='17'>17h</option> 
                            <option value='18'>18h</option> 
                            <option value='19'>19h</option> 
                            <option value='20'>20h</option> 
                            <option value='21'>21h</option> 
                    </select>
                   
                   <input type="submit" class="btn btn-default" value="afficher">
                </div>

                
                
               
                     
            </form>
            </div>
       <?php
           if(isset($_POST["debut"]) and isset($_POST["fin"])){
             $heureDebut=$_POST["debut"];
             $heureFin=$_POST["fin"];
           }
           
          
           $aujourdhui = date_create('today'); 
           $jour = date_format($aujourdhui, 'Y-m-d');
           $debut="".$jour." ".$heureDebut.":00:00";
           $fin="".$jour." ".$heureFin.":00:00";
           include("connectdb.php");
          $query="SELECT    joueur_id,nom,prenom,login,DATE_FORMAT(date_reservation, '%Y-%m-%d') as date, 
                DATE_FORMAT(date_reservation,'%H:%i:%s') as  time 
			from reservation
			inner join joueur
			on reservation.joueur_id=joueur.id
		    where reservation.date_reservation between '".$debut."' and '".$fin."'; ";
            
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)){
                echo $row["login"];
            }
           
           
        ?>
       </div>
       
       
    </div>




</body>


</html>