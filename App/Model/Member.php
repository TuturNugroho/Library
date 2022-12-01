<?php

namespace Staditek\App\Model;

use Staditek\App\Config\Database;

class Member extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select * from member");
        // var_dump($conn);     
        $statement->execute();
        // print_r($statement);

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
}