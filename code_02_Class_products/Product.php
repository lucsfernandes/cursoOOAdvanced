<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 07/03/2019
 * Time: 17:12
 */

class Product
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function list(){

        $query= "select * from products";

        $stmt = $this->db->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}