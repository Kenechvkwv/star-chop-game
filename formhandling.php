// Form Handling
<?php
    if (isset($_POST['submit'])) {
        echo "<pre>";
        print_r($_POST);
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
                header('Location: form.php'); // there should be no echo on the php page for this to work properly
            } else {
                echo $field_name . " is Submitted";
            }
        }
    }

// Create connection
$conn = new mysqli('localhost', 'root', '','class_db');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $conn->close();

// insert into database

$sql = "INSERT INTO user (name,phone,email,password,file)
        VALUES ('$name','$phone','$email','$pass1','$pic')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error creating new record: " .$conn->error;
}

$conn->close();

?>