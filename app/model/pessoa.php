<?php

require_once __DIR__ . '/../../config/database.php';

class Pessoa {
    private $conn;
    private $table = 'pessoas';

    public $id;
    public $nome;
    public $email;
    public $idade;

    public function __construct() {
        $database = new Database();
        $this->conn = $database-> getConnection();
    }

    public function all(){
        $query = 'SELECT * FROM' . $this->table;
        $stnt = $this->conn->prepare($query);
        $stnt ->execute();
        retun $stnt ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = 'SELECT * FROM' . $this->table; . 'WHERE id = ?'
        $stnt = $this->conn->prepare($query);
        $stnt ->execute([$id]);
        retun $stnt ->fetch(PDO::FETCH_ASSOC);
    }
}