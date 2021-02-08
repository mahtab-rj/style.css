<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <link rel="stylesheet" href="../view/style.css">
</head>
<body>
<?php
require '../controller/person.php';
require '../model/pdo.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$email=$_POST['email'];
$password=$_POST['password'];

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
$sql="SELECT id from users where email='$email'";
$query=$conn->prepare($sql);
$query->execute();
$result=$query->fetch();

if(empty($result)) {
    $person = new person($fname, $lname, $age, $weight, $height, $email, $password);
    $person->ageshow();
    $person->whshow();
    $person->bmishow();
    $person->inserttodb();
}
else{
        echo '<script type="text/javascript">alert("you already have an account with this email");window.location=\'index.php\';</script>';
    }


?>
</body>
</html>
