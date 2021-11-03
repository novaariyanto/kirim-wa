<?php 
$json = file_get_contents('php://input');
$data = json_decode($json);

if($data){
    
    $message = @$data->data_message->conversation;
    
    if($message == "halo"){
        $reply = "halo jago";
    }else if($message == "assalamualaikum"){
        $reply = "waalaikumsallam";
    }

    if($reply){
        echo json_encode([
            'type'=> 'chat',
            'body'=> $reply
        ]);
    }
    
}else{
    echo json_encode([
        "success"=>false,
        "message"=>"Request data not found"
    ]);
}
?>