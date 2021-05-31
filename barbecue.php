<?php
session_start();
if(isset($_POST['read'])) { 
    if (!isset($_SESSION['loggedin'])) {
         header('Location: login.php');
    }
}
?>

<?php

$bericht_Verzonden = false;
$betreft = "Barbecue";

if (isset($_POST['submit'])) {

    if (!isset($_POST['firstname']) ||!isset($_POST['lastname']) || !isset($_POST['email']) || !isset($_POST['keuze'])) {
        $fout = "Vul alsjeblieft alle velden in.";
    }
    if (isset($_POST['keuze' == true] )) {
        if(!isset($_POST['aantal'])||!isset($_POST['food'])||!isset($_POST['helpen'])) {
            $fout = "Vul alsjeblieft alle velden in.";
        }
    }
    $email = ($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $ongeldig = "Dit emailadres bevat een fout";
    }

    $voornaam = $_POST['firstname'];
    $achternaam = $_POST['lastname'];
    $emailadres = $_POST['email'];
    $keuze = $_POST['keuze'];
    $aantal = $_POST['aantal'];
    $eten = $_POST['food'];
    $helpen = $_POST['helpen'];

    $naar = "talingweidehouten@gmail.com";

    $bodytekst = "betreft: " . $betreft . PHP_EOL;
    $bodytekst .= "Verzender: " . $voornaam . " " . $achternaam   . PHP_EOL;
    $bodytekst .= "Emailadres: " . $emailadres . PHP_EOL;
    $bodytekst .= "Gaat meedoen: " . $keuze . PHP_EOL;
    $bodytekst .= "Aantal; mensen: " . $aantal . PHP_EOL;
    $bodytekst .= "Wat eten zij: " . $food . PHP_EOL;
    $bodytekst .= "Kan helpen: " . $helpen . PHP_EOL;

    mail($naar, $betreft, $bodytekst);


}

// try {
//     Mail($mail);
// } catch (Exception $e);
//     $geen_Verzending = "Het formulier is niet verzonden"
// ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talingweide-Zuid aanmelden</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
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
    <container id="containerBarbecue">
        <h4>Vul het onderstaand formulier in en druk op "verzenden", ook als je niet meedoet.</h4>
        
        <h4>Dank je wel</h4>

<h2 style="color: red;">       
    <?php 
    if(isset($ongeldig)){
        echo $ongeldig;
    } elseif (isset($fout)){
        echo $fout;

    } 
    if (isset($geen_Verzending)) {
        echo $geen_Verzending;
    } else {
        echo $verzonden;
    }   
    ?>
</h2>

<?php
if ($bericht_Verzonden) {
    echo  "bericht is verzonden. Dank je wel.";
     
} else {
?> 

        <fieldset><legend>Aan- of afmelden barbecue</legend>
            <form id="formBarbecue" action="barbecue.php" method="POST">

            <br>
                <input type="text" id="firstname" name="firstname" placeholder="Voornaam">
                <input type="text" id="lastname" name="lastname" placeholder="Achternaam">
                <input type="number" id="housenumber" name="housenumber" placeholder="huisnr."style="width: 50px;">
                <input type="email" id="email" name="email" placeholder="Email-adres">

                <h5>Ik/wij   doen &nbsp; wel/niet &nbsp; mee met de barbecue</h5>
                <div id="aanmeldbuttons">
                <label id="yes">ja</label>
                <input type="radio" id="yes" name="keuze" value="Ja">
                <label id="no">nee</label>
                <input type="radio" id="no" name="keuze" value="Nee">
                </div>
                    
                <legend><small>bij 'nee' niet verder invullen</small></legend>

                <h5>Ik/wij komen met .... personen:</h5>
                <label for="aantal">Aantal personen:</label>
                <input style="width: 50px;"  type="number" name="aantal" >

                <h5>Wij eten <small>(meerdere keuzes mogelijk)</small>:</h5>
                <label for="meat">vlees</label>
                <input type="checkbox" id="meat" name="food" value="vlees">
                <label for="fish">vis</label>
                <input type="checkbox" id="fish" name="food" value="vis">
                <label for="veggie">vegetarisch</label>
                <input type="checkbox" id="veggie" name="food" value="vegetarisch">

                <h5>Ik wil meehelpen</h5>
                <label for="helpen">JA</label><input type="radio"  name="helpen" value="JA">
                <label for="helpen_no">NEE</label> <input type="radio" name="helpen" value="NEE">

                <br><br><br>
                <input  class="versturen" type="submit" name="submit" value="verzenden">
            </form>
        </fieldset>
<?php
}
?>
    </container>

<footer>
    <img class="duck-water" src="media/duck-water.png" alt="talingplaatje.png">
        <h2>Contact: &nbsp; talingweidehouten@gmail</h2>
</footer

</body>
</html>