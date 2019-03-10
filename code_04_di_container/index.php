<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 07/03/2019
 * Time: 16:49
 */

require_once "IConn.php";
require_once "Conn.php";
require_once "Product.php";
require_once "Container.php";


$db = Container::getConn();

$product = Container::getProduct();

$list = $product->list();

var_dump($list);

