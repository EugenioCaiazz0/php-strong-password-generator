<?php

$password = "";
$passwordLength = $_GET['passwordLengthInput'];
if(!isset($_GET['passwordLengthInput'])) {
    $passwordLength = '0';
} else {
    $password = passwordGeneration($passwordLength, $password);
};
//risolto il casino con password, il problema principale era lo scope della funzione

function passwordGeneration($length, $resultString) {
        
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_';
     
    for ($i = 0; $i <= $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $resultString .= $characters[$index];
    }
     
    return $resultString;
} 

include_once __DIR__ . '/components/head.php';
?>

<body>
    <form action="index.php" method="GET" class=""> 
    <div class="mb-3">
        <label class="form-label">Scegliere lunghezza password</label>
        <input type="number" class="form-control" name="passwordLengthInput"  id="" placeholder="" min="5" max="20">
    </div>
    </form>

    <p> "La lunghezza della password è: <?php echo $passwordLength?>"</p>
    <p> "La password generata automaticamente è: <?php echo $password?>"</p>
    
</body>

</html>