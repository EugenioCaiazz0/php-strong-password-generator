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
?>