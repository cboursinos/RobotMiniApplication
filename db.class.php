<?php

namespace Robot;

use PDO;
use PDOException;

class DB extends \PDO
{
    function __construct($settings)
    {
        try {
            $this->DB_SERVER = new PDO(
                $settings['db_provider'].":host=".$settings['db_host'].
                ";port=".$settings['db_port'].
                ";dbname=".$settings['db_database'],
                $settings['db_user'], $settings['db_password']);
        }
        catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    function __destruct(){
        $this->DB_SERVER = null;
    }

    function MQ($query, $fetch=false){
        $stmt = $this->DB_SERVER->prepare($query);
        $stmt->execute();
        if (!$fetch) {
            return 0;
        }
        if ($fetch=="all") {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        if ($fetch=="one") {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
}