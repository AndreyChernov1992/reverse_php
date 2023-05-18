<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\App\Reverse;

$str = "abc1d";

$reverse = new Reverse($str);

echo $reverse->reverse($str);