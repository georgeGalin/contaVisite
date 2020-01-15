<?php
   session_start();
   
   if( isset( $_SESSION['contatore'] ) ) {
      $_SESSION['contatore'] += 1;
      echo("Bentornato è la ".$_SESSION["contatore"]." volta che visiti la pagina");
   }else {
      $_SESSION['contatore'] = 1;
      echo("Benvenuto è la ".$_SESSION["contatore"]." volta che visiti la pagina");
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>
</head>
<body>
</body>
</html>