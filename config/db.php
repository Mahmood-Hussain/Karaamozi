<?php
  class Database {
    public $con;
    public function __construct(){
        try {
            // Development
            $this -> con = mysqli_connect("localhost", "root", "root", "karaamozi");
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
  }
