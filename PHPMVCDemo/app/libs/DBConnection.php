<?php

    class DBConnection{
        private $host;
        private $user;
        private $pass;
        private $dbname;
        private $conn;

        public function __construct()
        {   
            $this->host = 'localhost';
            $this->user = 'root';
            $this->pass = '';
            $this->dbname = 'testdb';

            try{
                $sqlStr = "mysql:host=$this->host;dbname=$this->dbname";
                $this->conn = new PDO($sqlStr, $this->user, $this->pass);
            }catch(PDOException $e){
                $this->conn = null;
            }
    
        }


        public function getConnection(){

            return $this->conn;
        }
    }