<?php

class Car
{
    public $name;
    private $model;
    protected $color;

    public function setModel($model)
    {
            $this->model = $model;
    }
    public function getModel()
    {
        return 'model is  '.$this->model ;
    }
    final function setName() {
        return 'i am ' . $this->name;
    }

}

class SportCar extends Car
{

    public function hello()
    {
        return "hello ! i am " . $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }
}
$model_lambor = new Car();
$model_lambor -> setModel('aventadorS');
$model_lambor -> setName('Lamboghini');
$lamborghini = new SportCar();
$lamborghini -> setColor('yellow');
echo $model_lambor ->setName()."\n";
echo $lamborghini -> hello() . "\n";
echo $model_lambor ->getModel() ."\n";

