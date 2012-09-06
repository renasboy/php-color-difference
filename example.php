<?php
include('lib/color_difference.class.php');

$rgb1 = [ 255, 0, 0 ];
$rgb2 = [ 100, 0, 0 ];

$color_difference = (new color_difference())->deltaECIE2000($rgb1, $rgb2);

print $color_difference . chr(10);
?>
