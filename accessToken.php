<?php

$access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$data = [
    'consumerKey' => 'DQ7RHkLgaHQq3Aro18yyT33RH3BfmYDv',
    'consumerSecret' => 'SuAwRn1LJS7y1XnN'];
$headers = ['Content-Type:application/json; charset=utf8'];
$credentials = $data['consumerKey'] . ':' . $data['consumerSecret'];
$ch = curl_init($access_token_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_USERPWD, $credentials);
$result = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$result = json_decode($result);
$access_token = $result->access_token;
curl_close($ch);
?>
