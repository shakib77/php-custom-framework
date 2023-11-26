<?php

class BaseModel {
    public $data;

    protected $dataBase;
    protected $connection;

      public function __construct() {
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "post_test";

       $this->connection = new mysqli($servername, $username, $password, $dbname);

       if ($this->connection->connect_error) {
           die("Connection failed: " . $this->connection->connect_error);
       }

       protected function findOne($id) {
        $query = `SELECT  `;
       }
   }
    
}