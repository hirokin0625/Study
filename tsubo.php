<?php
require_once './class/Tsubo.php';
$obj = new Tsubo();
echo $obj->answer($argv[1]) . "\n";
