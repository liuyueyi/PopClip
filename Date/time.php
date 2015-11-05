<?php
date_default_timezone_set(PRC);
$input=getenv('POPCLIP_TEXT');
// 日期格式的时间转换为时间戳
$time = strtotime($input);
echo $time;