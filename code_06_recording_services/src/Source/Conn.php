<?php

namespace Source;

class Conn implements IConn
{
    private $dns;
    private $user;
    private $pass;

    public function __construct($dns, $user, $pass)
    {
        $this->dns = $dns;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        $db = new \PDO($this->dns, $this->user, $this->pass);
    }

}
