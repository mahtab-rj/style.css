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
$email=$_POST['email'];
$pass=$_POST['password'];
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
$sql="SELECT id,firstname,lastname,age,weight,height from users where email='$email' and pass='$pass'";
$query=$conn->prepare($sql);
$query->execute();
$result=$query->fetch();


if(!empty($result))
{
       $person=new person($result['firstname'],$result['lastname'],$result['age'],$result['weight'],$result['height'],$_POST['email'],$_POST['password']);
       $person->ageshow();
       $person->whshow();
       $person->bmishow();
}
else{

    echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
}

?>

</body>
</html>
