<?php
class Car {
private $model = '';

//__construct
public function __construct($model = null)
{
if($model)
{
$this -> model = $model;
}
}

public function getCarModel()
{
//We use the __CLASS__ magic constant in order to get the class name
//__LINE__  __METHOD__ __FILE__
return " The " . __CLASS__ . " model is: " . $this -> model;
}
}

$car1 = new Car('Mercedes');

echo $car1 -> getCarModel();