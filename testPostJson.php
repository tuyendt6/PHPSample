<?php

$data = array("username" => "Pham Xuan Tuyen", "password" => "123");

$url = "http://192.168.11.92/HTTPStringParamsPost.php";    

$content = json_encode($data);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
        array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

$json_response = curl_exec($curl);

// Decode the response
$responseData = json_decode($json_response, TRUE);

// Print the date from the response
echo $responseData;
?>
