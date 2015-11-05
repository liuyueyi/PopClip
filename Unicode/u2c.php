<?php 

$str = getenv('POPCLIP_TEXT');
echo preg_replace("/\\\u([0-9a-f]+)/ie","iconv('UCS-2','UTF-8', pack('H4', '\\1'))",$str);