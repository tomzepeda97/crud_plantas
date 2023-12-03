<?php

class DBConnect {
    private $user = "root";
    private $password = "";
    private $dbname = "altas_usuarios";
    private $host = "localhost";
    public $link;
    public function __construct()
    {
        $link = new PDO("mysql:host".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
    }



}