<?php 

$curl = curl_init();
        $data = [
            "jid" => "6285156345912",
            "apikey"=> "4YwLki3nduP8",
            "documentUrl" => "http://pustaka.unp.ac.id/file/abstrak_kki/EBOOKS/23%20kiat%20hidup%20bahagia.pdf"
        ];
        $payload = json_encode($data);

        $ch = curl_init("https://whatsva.com/api/sendImageUrl");
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