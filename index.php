<?php
session_start();
if(isset($_POST['read']))  {    
    if (!isset($_SESSION['loggedin'])) {
        header('Location: login.php');
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <title>Talingweide-Zuid home</title>
 
</head>
<body>
    <header>
        <h1>Talingweide-Zuid</h1>
        <div>
            <ul>
                <li><a href="barbecue.php">Aanmelden barbecue</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="uitloggen.php">Uitloggen</a></li>
            </ul>
        </div>
    </header>
    <container class="wrapper">
           
            <div id="imageOne"><img class="huisdeur"  id="foto69" src="media/69.jpg" alt="foto.jpg"></div>
       
        <div id="besteBuren">
            <h1>Beste buren,</h1>
            <p>Het is al weer lange tijd geleden dat wij buurtgenoten  iets gezamelijks met elkaar hebben ondernomen.
                Wij hebben nieuwe gezichten in onze straat gekregen, maar van een goede kennismaking is nog geen sprake geweest.
                Laten we daarom weer eens iets leuks met elkaar afspreken. Het einde van Corona is in zicht, dus wij durven het aan om weer 
                eens gezellig met elkaar te gaan <strong>barbecueën!</strong> Doen jullie ook mee?
                <p>Vul a.u.b. het <a id="a_Aanmeld" href="barbecue.php">aanmeldformulier</a> in. Ook als je niet meedoet. (Dat is voor ons ook handig om te weten.)</p>
            </p>
        </div>
        <div><img class="huisdeur" id="foto73" src="media/73.jpg" alt="foto.jpg"></div>
        <div><img class="huisdeur"  id="foto75" src="media/75.jpg" alt="foto.jpg"></div>
        <div><img class="huisdeur"  id="foto83" src="media/83.jpg" alt="foto.jpg"></div>
        <div><img class="huisdeur"  id="foto87" src="media/87.jpg" alt="foto.jpg"></div>
        <div><img class="huisdeur"  id="foto85" src="media/85.jpg" alt="foto.jpg"></div>
        <div><img class="huisdeur"  id="foto79" src="media/79.jpg" alt="foto.jpg"></div>
        
        
 
    </container>
<!-- 

</section>
<section>    


</section> -->
  


    
    <footer>
    <img class="duck-water" src="media/duck-water.png" alt="talingplaatje.png">
     <h2>Contact: &nbsp; talingweidehouten@gmail.com</h2>
     </footer> 
</body>
</html>