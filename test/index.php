<?php
include '../src/Resize.php';
use MSC\Instaresize\Resize;


$resize = new Resize();

$photo = '../test/images/red_black_abstract_496_3840x2160.jpg';

echo $resize->check($photo);
