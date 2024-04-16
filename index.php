<?php
include_once __DIR__ . '/components/head.php';

$passwordLength = $_GET["passwordLengthInput"];
function passwordGeneration($passwordLength) {
        
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_';
    $password = '';
     
    for ($i = 0; $i < $passwordLength; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }
     
    return $password;
} 

?>

<body>
    <form action="index.php" method="GET"> 
    <div class="mb-3">
        <label for="passwordLengthInput" class="form-label">Scegliere lunghezza password</label>
        <input type="number" class="form-control" name="passwordLengthInput"  id="" placeholder="" min="5" max="20">
    </div>
    </form>
</body>

</html>