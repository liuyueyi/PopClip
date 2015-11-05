<?php
date_default_timezone_set(PRC);
mb_internal_encoding("UTF-8");
$input=intval(getenv('POPCLIP_TEXT'));
if(empty($input)) {
    echo '';
}else {
    echo date('Y-m-d H:i:s', $input);
}