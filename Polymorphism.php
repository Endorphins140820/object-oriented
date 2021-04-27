<?php
interface Shape {
    public function calcArea();
}
class Circle implements Shape {
    private $radius;
    public function __construct($radius = null)
    {
if ($radius){
    $this -> radius = $radius;
}
    }
    public function calcArea()
    {
        // TODO: Implement calcArea() method.
        return $this->radius * $this->radius * pi();
    }
}
class Rectangle implements Shape{
    private $width;
    private  $height;
    public function __construct($width,$height){
        $this->width = $width;
        $this->height = $height;
    }
    public function calcArea()
    {
        // TODO: Implement calcArea() method.
        return $this->width * $this->height;
    }
}
$circle = new Circle(5);
$rectangle = new Rectangle(6,7);
echo 'circle area : ' . $circle->calcArea() . "\n";
echo 'rectangle area : ' . $rectangle->calcArea()."\n";
