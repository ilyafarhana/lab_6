<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
   
    function calculateArea($length, $width) {
        return $length * $width;
    }

    $length = 3;
    $width = 5;
    $area = calculateArea($length, $width);
    ?>

    <p>The area of a Rectangle with a width <?php echo $width; ?> and length <?php echo $length; ?> is <?php echo $area; ?>.</p>
    
</body>
</html>
