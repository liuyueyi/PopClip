<?php 

// 如果$text只有1位的时候，前置补0
function fill0($text)
{
    if(strlen($text) == 1) {
        return '0' . $text;
    } else {
        return $text;
    }
}

function convert16($ch)
{
    $hex = base_convert(ord($ch), 10, 16);
    $ans = fill0($hex);
    return $ans;
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