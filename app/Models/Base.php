<?php

namespace Shaon\App\Models;
class Base
{
    private $conn;

    public function __construct($servername, $username, $password, $database)
    {
        $this->conn = new mysqli($servername, $username, $password, $database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function close()
    {
        $this->conn->close();
    }
}

// Usage:
//$database = new Base("your_server_name", "your_username", "your_password", "your_database_name");
//
//$result = $database->query("SELECT * FROM your_table_name");
//// Process $result as needed
//
//$database->close();


//private $connection;

//    public function __construct() {
//        $servername = "localhost";
//        $username = "root";
//        $password = "";
//        $dbname = "post_test";
//
//        $this->connection = new mysqli($servername, $username, $password, $dbname);
//
//        if ($this->connection->connect_error) {
//            die("Connection failed: " . $this->connection->connect_error);
//        }
//    }

//..................

//    public function queryData($sql) {
//        $result = $this->connection->query($sql);
//
//        // Process the result or perform other database operations
//
//        return $result;
//    }

//    public function findOne($table, $condition) {
//        $sql = "SELECT * FROM $table WHERE $condition LIMIT 1";
//        $result = $this->queryData($sql);
//
//        if ($result->num_rows > 0) {
//            return $result->fetch_assoc();
//        } else {
//            return null;
//        }
//    }