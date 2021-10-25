<?php

namespace config;

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Track');
define('DB_PASSWORD', 'MyTime');
define('DB_NAME', 'SimpleTracker');

use PDO;
use PDOException;

class Database
{

    public static function init_database(): PDO
    {
        try {
            $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }

        try {
            $sql = "CREATE DATABASE SimpleTracker";
            $pdo->exec($sql);
            echo "Database created successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }

        // Close connection
        return $pdo;
        unset($_pdo);
    }
}
