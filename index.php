<?php

require_once __DIR__ . "/vendor/autoload.php";

use \App\Strings;

$str = "olleH";

$reverse = new Strings();

echo $reverse->reverse($str);