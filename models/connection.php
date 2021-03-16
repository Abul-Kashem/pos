<?php

class connection
{
    static public function connect()
    {

        $link = new PDO("mysql:host=localhost; dbname=dbPOS", "root", "root");
        $link->exec("set names utf8");
        return $link;
    }
}
