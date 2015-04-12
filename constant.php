<?php
class Circle{
    const pi = 3.141;
    public function Area($radius)
    {
        return self::pi * ($radius * $radius);
    }
    
    
}
$area = new Circle;
echo $area->Area(100);
echo $area->Area(300);
?>
