<?php

class DB  
{
	public $host;
	public $user;
	public $pass;
	public $dbname;
	public $con;

	public function __construct() {
        $this->host = "127.0.0.1";
		$this->user = "root";
		$this->pass = "";
		$this->dbname = "thesis";
		$this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);
    }

	
}
