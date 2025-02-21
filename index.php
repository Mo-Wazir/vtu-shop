<?php
declare(strict_types=1);

/**
 * Task 2: Racing Car Class
Create a class to represent cars in Need for Speed.
*/


class RacingCar
{
	public string|typed $brand;
	public string|typed $model;
	public int|typed $speed = 0;
	public int|typed $maxSpeed;
	public bool|typed $isNitroAvailable;

	
	// function __construct(argument)
	// {
	// 	// code...
	// }

	public function accelerate($increaseBy)
	{

		echo $speedIncrement = $increaseBy +  $this->speed;
		//$speedIncrement >= $this->maxSpeed ?? '';
	}

	public function useNitro()
	{
		if ($this->isNitroAvailable) {
			echo $this->speed * 2;
		} else{
			echo "Nitro is not available";
		}
	}

	public function applyBrakes()
	{
		echo $this->speed = 0;
	}

}

$NissanGTR = new RacingCar();
$NissanGTR->maxSpeed = 300;
$NissanGTR->isNitroAvailable = true;
$NissanGTR->accelerate(100);
$NissanGTR->useNitro();
$NissanGTR->applyBrakes();
$NissanGTR->useNitro();



