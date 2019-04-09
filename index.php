<?php
include_once('Circles.php');
include_once('Cylinder.php');
include_once('Rectangle1.php');
include_once('Squares.php');

$circle = new Circles('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle1('Rectangle 01', 3, 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Squares('Square 01', 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';