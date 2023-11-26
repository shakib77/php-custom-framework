<?php

namespace Shaon\App\Http\Controllers;

class BaseController {

    private $connection;

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
    protected function render($view, $data)
    {
        ob_start();
        extract($data);
        include __DIR__ . '/../../../resources/views/' . $view . '.blade.php';
        return ob_get_clean();
    }

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
}