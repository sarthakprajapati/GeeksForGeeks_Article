

<?php 
$string64 = 'iFNjIMUrpy44qnrv6g4XeapaGleRuZS+6268ix010N6doyqDpNTg5Q=='; 
$string = base64_decode($string64);
$iv = '87654321'; 
$passphrase = 'geeks'; 

$encryptedString = encryptString($string, $passphrase, $iv); 
echo $encryptedString;
// Expect: iFNjIMUrpy44qnrv6g4XeapaGleRuZS+6268ix010N6doyqDpNTg5Q==

function encryptString($unencryptedText, $passphrase, $iv) { 
  $enc = mcrypt_decrypt(MCRYPT_BLOWFISH, $passphrase, $unencryptedText, MCRYPT_DECRYPT, $iv); 
  return ($enc); 
} 
?> 


