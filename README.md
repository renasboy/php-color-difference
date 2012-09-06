php-color-difference
====================

PHP Color Difference using Delta E CIE 2000
<br/><br/>
Example Usage (also in example.php):

<pre>
<code>
<?php
include('lib/color_difference.class.php');

$rgb1 = [ 255, 0, 0 ];
$rgb2 = [ 100, 0, 0 ];

$color_difference = (new color_difference())->deltaECIE2000($rgb1, $rgb2);

print $color_difference . chr(10);
?>
</code>
</pre>

Installation
============

Depends on PHP 5.4<br/>

<pre>
<code>
$ git clone https://github.com/renasboy/php-color-difference
$ cd php-color-difference
$ php example.php
</code>
</pre>

Formula from www.brucelindbloom.com<br/>
Inspired by ruby colorscore and python colormath<br/>

