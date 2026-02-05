<?php

namespace App\Repository;

use App\Core\Database;

class ProductRepository
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findAll(): array
    {
        $query = $this->db->prepare("SELECT * FROM products");
        $query->execute();

        return $query->fetchAll();
    }


}