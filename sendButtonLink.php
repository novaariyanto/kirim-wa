<?php

        $curl = curl_init();
       
        $data = [
            
            "jid" => "62895361034833@s.whatsapp.net",
            "apikey"=> "4YwLki3nduP8",
            "title"=>"Hi it's a template message",
            "footer"=>"Hello World",
            "templateButtons"=>[
                ["index"=> 1, "urlButton"=> ["displayText"=> "Google", "url"=> "https://google.com"]],
                ["index"=> 2, "callButton"=> ["displayText"=> "Call me!", "phoneNumber"=> "+62895361034833"]],
                ["index"=> 3, "quickReplyButton"=> ["displayText"=> "This is a reply, just like normal buttons!", "id"=> "id-like-buttons-message"]]
  
            ]
        ];
         $payload = json_encode($data);
       
        $ch = curl_init("https://whatsva.com/api/sendButtonUrlMessages");
        # Setup request to send json via POST.

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json','apikey:4YwLki3nduP8'));
        # Return response instead of printing.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        # Send request.
        $result = curl_exec($ch);
        curl_close($ch);
        # Print response.
        print_r($result);
        