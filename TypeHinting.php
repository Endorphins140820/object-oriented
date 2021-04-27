<?php

class car
{
    protected $model;
    protected $hasSunRoof;
    protected $numberOfDoors;
    protected $price;
    protected $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function setHasSunRoof(bool $value)
    {
        $this->hasSunRoof = $value;
    }

    public function setNumberOfDoors(int $value)
    {
        $this->numberOfDoors = $value;
    }

    public function setPrice(float $value)
    {
        $this->price = $value;
    }
}

class Driver
{

}
$driver1 = new Driver();
$car1    = new Car($driver1);