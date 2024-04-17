<?php 

session_start();

 // verifico che esista la variabile in sessione 
 if(!isset($_SESSION['password'])){
    // se non esiste reindirizzo alla index 
    header('Location: /index.php');
  } else {
    $password = $_SESSION['password'];
  }

?>

<p> La password generata automaticamente è: <span class="fw-bold"><?php echo $password?></span> </p>
