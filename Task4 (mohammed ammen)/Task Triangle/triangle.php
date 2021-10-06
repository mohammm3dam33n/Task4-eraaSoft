
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>triangle</title>
</head>
<body>
    
<?php

$x= 50;
$y= 100;
// To calculate the area of a triangle, multiply the height by the width (this is also known as the 'base') then divide by 2.
$a=($x*$y)/2;
?>


<p>Area of a triangle = (base length * height) divided by 2 =<span> <?= $a?> cm<sup>2</sup></span></p>
</body>
</html>