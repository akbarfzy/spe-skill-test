<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SpeSkillTest extends CI_Controller {

	public function index()
	{
		
	}

	public function narcissisticNumber($number = "111")
	{
		$resultNumber = 0;

		$tempNumber = $number;
		$countNumber = strlen($number);

		while($number != 0) {
			$count = $number%10;
			$resultNumber = $resultNumber+pow($count, $countNumber);
			$number = floor($number/10);
		}

		if($resultNumber == $tempNumber) {
			echo "TRUE";
		} else {
			echo "FALSE";
		}

	}

	public function parityOutlier()
	{
		$numbers = [11, 13, 15, 19, 9, 13, -21];

		foreach($numbers as $number) {
			if($number % 2 == 0) {
				//$evenNumber[] = $number;
				$evenNumber[] = $number;
			} else {
				//$oddsNumber[] = $number;
				$oddsNumber[] = $number;
			}
		}

		echo @$oddsNumber." (the only odd number) <br>";
		echo  @$evenNumber." (the only even number) <br>";

		if (!empty($oddsNumber) && empty($evenNumber)) {
			echo "FALSE (all odd integer, no outlier)";
		}	
	}

	public function findNeedle()
	{
		$arrCol = ["red", "blue", "yellow", "black", "grey"];
		$needCol = "blue";

		if (array_search($needCol, $arrCol)) {
			echo 1;
		}
	}

	public function blueOcean()
	{
		$array = [1,2,3,4,6,10];
		$getArray[] = $array[1];

		$bl = array_diff($array, $getArray);

		print_r($bl);
	}

}

/* End of file Spe.php */
/* Location: ./application/controllers/Spe.php */