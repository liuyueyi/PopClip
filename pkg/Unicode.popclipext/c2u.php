<?php 

function convert16($ch)
{
    $hex = base_convert(ord($ch), 10, 16);
    return str_pad($hex, 2, 0, STR_PAD_LEFT); // 如果不满足2位，则左补齐0
}

// 这个函数有问题，对于符号的抓吗不对
function unicode_encode($name)
{
    $name = iconv('UTF-8', 'UCS-2', $name);
    $len = strlen($name);
    $str = '';
    for ($i = 0; $i < $len - 1; $i = $i + 2)
    {
        $c = $name[$i];
        $c2 = $name[$i + 1];
        if (ord($c) > 0)
        {    // 两个字节的文字
            $str .= '\u'. convert16($c) . convert16($c2);
        }
        else
        {
            $str .=  $c2;
        }
    }
    return $str;
}
// $name = '我很好，不要难过，不好！';
// print_r(unicode_encode($name) . "--\n");

$input = getenv('POPCLIP_TEXT');
echo unicode_encode($input);