
<?php
/*cipher method's string*/
$method = 'AES-256-CBC';

/*openssl_cipher_iv_length() function*/

$ivlen = openssl_cipher_iv_length($method);

echo $ivlen;
?>