<?php session_start(); 

$inloggegevens = array('Weekend' => 'Weekend', 'Marc' => 'Hoogsteden');
	
	if(isset($_POST['submit'])){  
    if(!isset($_POST['username'])) { 
      $foutmelding =  "Er is geen gebruikersnaam ingevoerd";
    }
    if (!isset($_POST['password'])) {
      $foutmelding = "Er is geen wachtwoord ingevoerd"; 
    } else {
		
		/* $_POST gegevens naar nieuwe variabelen */

		$gebruikersnaam = $_POST['username'];
		$wachtwoord = $_POST['password'] ;
    }
		
		if (isset($inloggegevens[$gebruikersnaam]) && $inloggegevens[$gebruikersnaam] == $wachtwoord){
			/* Maak session variabelen aan en stuur naar header  */
			$_SESSION['UserData']['Username']=$inloggegevens[$gebruikersnaam];
      $_SESSION['loggedin'] = true;
            // HIERONDER WORDT DE DUUR VAN DE SESS BEPERKT TOT 10 MIN (10*60)
      $_SESSION['start'] = time();
      $_SESSION['expire'] = $_SESSION['start'] + (10 * 60) ;
			header("location:index.php");

			exit;
		} else {
			$foutmelding = "Geen geldige inloggegevens!";
		}
  }	

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap"
      rel="stylesheet"
    />
    <title>Talingweide-Zuid inlog</title>
  </head>
  <body id="bodyInlog">
    <header>
      <h1>Talingweide-zuid</h1>
    </header>

    <div id="welkom">
      <div id="upContainerLeft">
        <div><h1>wel</h1></div>
      </div>
      <div id="upContainerRight">
        <div><h1>kom</h1></div>
      </div>
      <div id="downContainerLeft">
        <div><h1>kom</h1></div>
      </div>
      <div id="downContainerRight">
        <div><h1>verder</h1></div>
      </div>
    </div>

    <div id="div_Inlog">
        <h2>Voer de gegevens die je hebt gekregen hieronder in.</h2>
        <p><small>gebr.n. = Weekend , WW = Weekend <small></p>

        <h2 style="color: red;">       
          <?php if(isset($foutmelding)){
              echo $foutmelding;
                    } 
          ?>
        </h2>

        <fieldset id="fieldsetInlog">
          <form id="form_Inlog" action="login.php" method="POST">
            <label for="username">
                <legend><small>gebruikersnaam</small></legend></label>
            <input type="text" id="username" name="username" />

            <label for="password" id="password">
                <legend><small>wachtwoord</small></legend></label>
            <input type="password" id="password" name="password" />

            <input type="submit" class="versturen" name="submit" value="versturen"/>
          </form>
        </fieldset>
    </div>

    <footer>
    <img class="duck-water" src="media/duck-water.png" alt="talingplaatje.png">
      <h2>Contact: &nbsp; talingweidehouten@gmail</h2>
    </footer>
  </body>
</html>
