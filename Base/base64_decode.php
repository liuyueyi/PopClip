<?php
$input=getenv("POPCLIP_TEXT");
if(empty($input)) {
    echo ''; 
} else {
    echo base64_decode($input);
}
