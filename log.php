<?php
function logger($message, array $data, $logFile = "error.log"){

    foreach ($data as $key => $val) {
    
        $message = str_replace($key, $val, $message);
    
    }
    
    
    $message .= PHP_EOL;
    
    
    return file_put_contents($logFile, $message, FILE_APPEND);
    
    }
    

logger("%file% %level% %message%", ["level" => "warning", "message" =>"This is a message", "file" =>__FILE__]);
    
     
