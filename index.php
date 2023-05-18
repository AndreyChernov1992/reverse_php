<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\App\Reverse;

$str = "olleH dlroW";

$reverse = new Reverse($str);

$reverse->reverse($str);