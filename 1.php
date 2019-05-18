<?php

function getBiodata($name, $address, array $hobbies, $is_married, $school, array $skills)
{
	$args = func_num_args();
	for ($i=0; $i < $args; $i++)
	{
		echo json_encode(func_get_arg($i));
	}

	return;

}

class School
{
	public $highSchool, $university;

	public function __construct($hs, $u)
	{
		$this->highSchool = $hs;
		$this->university = $u;
	}
}

class Skills
{
	public $name, $score;

	public function __construct($name, $score)
	{
		$this->name = $name;
		$this->score = $score;
	}
}

$school = new School("SMKN 7 Samarinda","Universitas situ :)");
$skill1 = new Skills("C++","90");
$skill2 = new Skills("PHP","87");
$skill3 = new Skills("Python","88");
$skill4 = new Skills("Ruby","82");

echo getBiodata("Rizki",
				"Jalan Jalan",
				array("Programming","Bermain Game","Bermain Game","Bermain Game"),
				false,
				$school,
				array($skill1,$skill2,$skill3,$skill4)
			);
?>