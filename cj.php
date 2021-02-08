<?php
$items = ["sony" => "television", "bmw" => "car", "yamaha" => "bike", "duplex" => "house"];

foreach ($items as $key => $value) {
    echo "we have ". $key. " ". $value. "<br>";
} 
echo "<br>";
echo date('d/m/y/l');
echo "<br>";
echo date('D-M-Y');
echo "<br>";
echo date('h:i:s');
$br = '<br>';
echo $br;
echo $br;
echo $br;



//create a file
//$myfile = "file.txt";
//fopen($myfile, 'w');

/* write text inside file
$myfile = "file.txt";
$handle = fopen($myfile, 'w');
$data = "We are learning php programming";
fwrite($handle, $data);
*/

//update file text
/*
$myfile = "file.txt";
$handle = fopen($myfile, 'a');
$data = "step by step ";
fwrite($handle, $data);*/

//delete file
/*
$myfile = "file.txt";
unlink($myfile);*/

// $myfile = "text.txt";
// fopen($myfile, 'w');

$myfile = "text.html";
$handle = fopen($myfile, 'w');
$data = "We are learning php programming";
fwrite($handle, $data);

$h1 = "<h1> this is my new h1 tag </h1>\n";
$input = "<input value = 'name' placeholder='enter name here'>\n";
$btn = "<button>submit</button>\n";

function file_handle($cont, $myfile){
    $open = fopen($myfile, 'a');
    $handle = fwrite($open, $cont);
    return fclose($open);
}

$div = fopen('text.html', 'r');
echo fread($div, filesize("text.html"));

$cont = $h1.$input.$btn;

file_handle($cont,$myfile);


echo $br;
echo $br;


?>