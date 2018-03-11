<?php

if($argc < 3){ echo "Invalid Args\n"; exit(-1); }

$url = trim($argv[1]);
$msg = trim($argv[2]);

$context = stream_context_create(
    array(
        'http' => array(
            'method'=> 'POST',
            'header'=> 'Content-type: application/json; charset=UTF-8',
            'content' => json_encode(
                array(
                    'content' => $msg,
                )
            )
        )
    )
);

$ret = file_get_contents($url, false, $context);
if($ret !== FALSE){
    echo "Success\n";
}
