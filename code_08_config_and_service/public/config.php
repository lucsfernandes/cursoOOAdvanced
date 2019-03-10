<?php

use Pimple\Container;

$container = new Container();

$container['dns'] = "mysql:host=localhost;dbname=test_oo";
$container['user'] = "root";
$container['pass'] = "";