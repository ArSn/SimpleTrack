<?php

namespace infrastructure;

include("Domain/IRepository.php");
include("config.php");

use config\Database;
use domain\IRepository;

class PDORepository implements IRepository
{

    public function create($object)
    {
    }
    public function get($object): string
    {
        $Database = Database::init_database();
        return "jo geil, hier kommt der Datenbankbefehl rein: " . $object;
    }
    public function getAll($enumOfObject)
    {
    }
    public function update($object)
    {
    }
    public function delete($object)
    {
    }
}
