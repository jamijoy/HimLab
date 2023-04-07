<?php
require_once('assets/db/db_con/db.php');
class IndexModel extends DB
{
	public function __construct() {

        parent::__construct();
    }


	public function getDoctorsListByDepartment($department)
	{
		// die($this->host);
		$q = "Select * from doctors where Department='" . $department . "'";
		$r = mysqli_query($this->con, $q);
		return $r;
	}
	public function getRankDoctorsListByDepartment($department)
	{
		$q = "Select * from doctors where Department='" . $department . "' order by Ranking desc";
		$r = mysqli_query($this->con, $q);
		return $r;
	}
}
