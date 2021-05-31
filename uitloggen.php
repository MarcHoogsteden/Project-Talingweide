
<?php
session_start();

// ARRAY MET VARIABELEN WORDT GELEEGD.
$_SESSION = array();
// DE ARRAQY MET SESSION COOKIES WORDEN OPGEVRAAGD (session_get_cookie_params) en gedeleted door de cookieduur negatief te maken
// Session destroy vernietigd data die bij de sessie horen(ingevulde formulieren e.d.), maar niet de global vairabelen of de session-cookie.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
// LAATSTE HANDELING TER BEËINDIGING.
session_destroy();
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
    <style>
        #a_opnieuwInloggen   {
            background: radial-gradient(#47102e, #a75080);
            color: #dbffab;
        }
        container   {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 10px;
        }
        </style>
        
  </head>
  <body id="bodyInlog">
    <header>
      <h1>Talingweide-zuid</h1>
    </header>
    <container>

    
<h2>Je bent nu uitgelogd.</h2><br>
<h2>Als je weer wilt inloggen, <a id="a_opnieuwInloggen" href="login.php">Klik hier</a></h2>

      <footer>
      <img class="duck-water" src="media/duck-water.png" alt="talingplaatje.png">
        <h2>Contact: &nbsp; talingweidehouten@gmail</h2>
      </footer>
    </container>
  </body>
</html>
