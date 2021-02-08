<?php $course = ["Functional Anatomy"=>"a","Anthropology"=>"b","research methodology"=>"a","head & neck"=>"a","histopathology"=>"b","embalming techniques"=>"a","enzymology"=>"a","histology"=>"a","Biochemistry"=>"c"];
$student_name = "Kenechukwu U.";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomy</title>
    <link rel="stylesheet" href="Framework/materialize-v1.0.0/materialize/css/materialize.min.css">
    <style>
        body{
            background-image: url('media/work-4.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <h3><?= $student_name ?> </h1>
    <table class="striped highlight centered responsive-table" width=100% style='text-align:center;' border=1px>
        <thead>
            <tr> 
                <th>S/N</th>
                <!-- <th>Name</th> -->
                <th>Course</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $numm = 1;
        foreach ($course as $coursename => $grade){?> 
     <tr>
            <td><?=  $numm ?></td>
            <!-- <td><  $student_name ?></td> -->
            <td><?= ucfirst($coursename) ?></td>
            <td><?= ucfirst($grade)?></td>
        </tr>
        <?php $numm++;}?>
        </tbody>
    </table>
</body>
</html>