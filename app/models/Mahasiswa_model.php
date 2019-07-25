<?php

class Mahasiswa_model{
    //databasehandler
    private $dbh;
    //statement untuk query
    private $stmt;

    public function __construct(){
        //data source name
        $dsn = "mysql:host=127.0.0.1;dbname=phpmvc";

        try {
            $this->dbh = new PDO($dsn, "root", "");
        } catch(PDOExeption $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}