<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php 
    $name = "Muhammad Asyraf";
    $matric_number = "AI210567";
    $course = "BIT21503 Web Development";
    $year_of_study = "Year 3";
    $address = "No.4, Taman Bukit Pelindung, 26500, Kuantan, Pahang";
    ?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
</body>
</html>

