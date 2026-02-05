<?php

namespace App\Repository;

use App\Core\Database;

class ContactRepository
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findAll(): Array
    {
        $query = $this->db->prepare("SELECT * FROM contact");
        $query->execute();

        return $query->fetchAll();
    }
}