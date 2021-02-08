<?php
$br = "<br>";
$my_students = ["tall"=>"Ekene","fine"=>"Vincent","short"=>"Gideon","stubborn"=>"Ubesie","dark"=>"Darlington","fair"=>"Peter","cool"=>"Camillus","sleepy"=>"Onyeka","late"=>"Benard"];//,"clinton"=>["profession"=>"programmer","trader"]];

$vehicles = array("ford", "benz", "peugeut", "toyota", "honda", "lexus", "kia");

// $length = count($vehicles) - 1;
// for($i=0; $i <= $length; $i++){
// echo $vehicles[$i], $br;
// }
// echo $br;
// echo $br;

// $last_index = count($vehicles)-1;
// for ($j=$last_index;$j>=0;$j--){
//     echo $vehicles[$j], $br;
// }
// echo $br;

// foreach($vehicles as $value){
//     echo "this is", " ",$value, $br;
// }

// echo(implode("----",$vehicles));

// echo $br;

$num = 1;

echo "<table width=100% style='text-align:center;' border=1px>
<thead>
    <tr> 
        <th>S/N</th>
        <th>Name</th>
        <th>Attribute</th>
    </tr>
</thead>
<tbody>";
foreach ($my_students as $student_attribute => $student_name) {
    echo "<tr>
            <td>$num</td>
            <td>$student_name</td>
            <td>".ucfirst($student_attribute)."</td>
        </tr>";
        $num++;
}
echo
"</tbody>
</table>";
echo $br;
echo $br;
echo $br;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>madoooo</title>
</head>
<body>
    <table width=100% style='text-align:center;' border=1px>
        <thead>
            <tr> 
                <th>S/N</th>
                <th>Name</th>
                <th>Attribute</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $numm = 1;
        foreach ($my_students as $student_attribute => $student_name){?> 
     <tr>
            <td><?=  $numm ?></td>
            <td><?=  $student_name ?></td>
            <td><?= ucfirst($student_attribute)?></td>
        </tr>
        <?php $numm++;}?>
        </tbody>
    </table>
</body>
</html>