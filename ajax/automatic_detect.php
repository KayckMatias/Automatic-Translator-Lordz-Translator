<?php
include("config.php");
$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://translate.yandex.net/api/v1.5/tr.json/detect",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_POSTFIELDS =>  "key=". $key . "&text=" . $_GET['text'],
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $detected = json_decode($response, true);
    echo $detected['lang'];
}