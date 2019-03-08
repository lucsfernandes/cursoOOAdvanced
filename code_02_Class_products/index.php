<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 07/03/2019
 * Time: 16:49
 */

require_once "Product.php";

$db = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "");

$product = new Product($db);

$list = $product->list();

var_dump($list);