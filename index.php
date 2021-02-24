<?php

$kode_token = "OIptCXU3";
$id_device = "10";

$messsage = "Test Kirim WA";
$to = "62895361034833@s.whatsapp.net";

$payload = json_encode([
    "id_device" => $id_device,
    "tujuan" => $to,
    "message" => $messsage,
]);

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://whatsva.com/api/sendText",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => array(
        'Content-Type:application/json',
        "apikey: " . $kode_token,
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
