<?php
$input=getenv("POPCLIP_TEXT");
if(empty($input)) {
    echo ''; 
} else {
    $param = json_decode($input);
	echo json_encode($param, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
}
