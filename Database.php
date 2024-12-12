<?php

class Database {

    public $pdo;

    // Konstrktors un destruktors
    public function __construct($config) {
        // Data Source Name
        $dsn = "mysql:" . http_build_query($config, "", ";");
        // PHP Data Object
        $this->pdo = new PDO($dsn);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    // Uztaisīt metodi query
    public function query($sql) {
        $statement = $this->pdo->prepare($sql);
        // Izpildīt vaicājumu
        $statement->execute();
        return $statement;
    }
}