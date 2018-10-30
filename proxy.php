<?php
header("Acces-Control-Allow-Origin:*");
header("Acces-Control-Allow-Headers:*");
header('Content-Type:application/json');

$url = urldecode($_GET['domain']);
<<<<<<< HEAD
=======

>>>>>>> be67e1840fe5a0d078c0b2f7b91ec546ca7bff6e

httpsCurl($url);

function httpsCurl($url) 
{
$header = array("Accept: application/json");
<<<<<<< HEAD


=======
>>>>>>> be67e1840fe5a0d078c0b2f7b91ec546ca7bff6e
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)');

$retValue = curl_exec($ch);
$response = json_decode(curl_exec($ch));
$ee       = curl_getinfo($ch);
//print_r($ee);

echo ($retValue);

}


