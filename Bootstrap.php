<?php
require_once '/Users/ootsubo/work/php/install/phpunit-all-in-one/vendor/autoload.php';

spl_autoload_register(function ($class) {
        require_once __DIR__ . "/class/$class.php";
});
