<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input required type="text" name="name" placeholder="Enter Name" >
        <br>
        <input required type="tel" name= "phone" placeholder="Enter Telephone Number">
        <br>
        <input required type="mail" name="email" placeholder="Enter Email">
        <br>
        <input required type="password" name= "pass" placeholder="Enter Password">
        <input required type="password" name="pass2" placeholder="Re-enter Password">
        <br>
        <input required type="file" name="pic" placeholder="Choose Photo">
        <br>
        <button name ="submit" type="submit">submit</button>
    </form>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        // echo "<pre>";
        //print_r($_POST);
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pic = $_FILES['pic'];
        $pass = $_POST['pass'];
        // print_r($pic);

        $data = [$name, $phone, $email, $pass];

        foreach ($data as $field_name => $field) {
            # code...
            if(empty($field)) {
                $_SESSION['msg'] = $field_name . " is empty.<br>";
            } else {
                //echo $field_name . " is Submitted";
            }
        }
    }
 

// Create connection
$conn = new mysqli('localhost', 'root', '','class_db');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

die;
// Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $conn->close();

// insert into database

$sql = "INSERT INTO USER (name,phone,email,password,file)
        VALUES ('$name','$phone','$email','$pass','$pic')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error creating new record: " .$conn->error;
}

$conn->close();

?>