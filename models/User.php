<?php 

class User 
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

   
    
}