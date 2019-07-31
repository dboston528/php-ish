<?php

abstract class Shape

{

	public $name;

	protected $sides = array();

	//change this from private to protected
	protected $side_count;
 

	public abstract function area();



	public function __construct(array $sides)

	{

		$this->side_count = count($sides);

	}



	public function perimeter()

	{

		$perimeter = 0;
		foreach ($sides as $side) {

			$perimeter += $side;

		}

		return $perimeter;

	}

}



class Rectangle extends Shape

{

	public function __construct(array $sides)

	{

		parent::__construct($sides);

		$this->name = 'Rectangle';

		if (($this->side_count == 4) && ($sides[0] == $sides[2]) && ($sides[1] == $sides[3])) {

			$this->sides = $sides;

		} else {

			throw new InvalidArgumentException('Invalid side data for a rectangle');

		}

	}

	
//How does his function does this function communicate with the function __construct?
	public function area()

	{

		return $this->sides[0] * $this->sides[1];

	}

}



class Square extends Rectangle

{

	public function __construct(array $sides)

	{

		$this->name = 'Square';

		parent::__construct($sides);

		if ($sides[0] == $sides[1]) {

			$this->sides = $sides;

		} else {

			throw new InvalidArgumentException('Invalid side data for a square');

		}

	}

	
//How does this function take info from function __construct?
	public function __toString()

	{
		return 'A '.$this->name.' with side length of '.$this->sides[0];

	}

}


//added abstarct becsause it contained an abstaract method or trying ot access an abstract method
abstract class Triangle extends Shape

{

	public function __construct(array $sides)

	{

		$this->name = 'Triangle';

		parent::__construct($sides);

		if ($this->side_count == 3) {

			$this->sides = $sides;

		} else {

			throw new InvalidArgumentException('Invalid side data for a triangle');

		}

	}

}

?>