<?php
namespace App;

class Strings {
    public function reverse($str) {
        $arr = str_split($str);
        $arrReversed = array_reverse($arr);
        return var_dump(implode("", $arrReversed));
    }
}