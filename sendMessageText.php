<?php 

$curl = curl_init();
        $data = [
            "message" => "test bro",
            "jid" => "62895361034833",
            "apikey"=> "yvBmbnghGusY"
        ];
        $payload = json_encode($data);

        $ch = curl_init("https://whatsva.com/api/sendMessageText");
        # Setup request to send json via POST.

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        # Return response instead of printing.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        # Send request.
        $result = curl_exec($ch);
        curl_close($ch);
        # Print response.
        print_r($result);