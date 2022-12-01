<?php

namespace Staditek\App\Model;

use Staditek\App\Config\Database;

class Librarian extends Database
{
    protected $table ='librarian';
    public function all()
    {
        $statement = self::$conn->prepare("select * from $this->table");
        // var_dump($conn);     
        $statement->execute();
        // print_r($statement);

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function finID($id)
    {
        $statement = self::$conn->prepare("select * from $this->table where $id = '$id'");
        // var_dump($conn);     
        $statement->execute($id);
        // print_r($statement);

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function findUsername($username){
        $statement = self::$conn->prepare("select id,name,password,from $this->table where $username = '$username'");
        $statement->execute($username);
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($user){
        $statement = self::$conn->prepare("INSERT INTO $this->table(name,email,password,created_ad) VALUES (:name,:email,:password,:created_ad)");
       // $statement->execute($id);
        return $statement->execute($user);
    }
    public function update($user,$id){
        $statement = self::$conn->prepare("UPDATE $this->table SET name = :name, email = :email, created_ad = :created_ad WHERE id = :id");
        $user['$id'] = $id;
        return $statement->execute($user);
    }
    public function delete($id){
        $statement = self::$conn->prepare("DELETE from $this->table where id = :id");
        //$user['$id'] = $id;
        return $statement->execute(['id' => $id]);
    }
    
}