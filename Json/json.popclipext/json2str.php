<?php
$input=getenv("POPCLIP_TEXT");

function jsonSimple($data) {
    $size = strlen($data);
    $ans = '';
    $ch = '';
    $instr = false;
    for ($i = 0; $i < $size; $i++) {
        $ch = $data[$i];
        if ($ch == '"') {
            $instr = !$instr;
        }

        if (!$instr && ctype_space($ch)) { // 过滤掉非字符串中的空白字符
            continue;
        } else {
            $ans = $ans . '' . $data[$i];
        }
    }

    return $ans;
}

if(empty($input)) {
    echo '';
} else {
	echo jsonSimple($input);
}
