<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
   <link rel="stylesheet" href="../view/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--<div class="right">
    <h2>BMI calculator</h2>
    <form action="result.php" target="_parent" method="post">
        First Name : <input type="text" placeholder="Mahtab" name="fname"> <br><br>
        Last Name : <input type="text" placeholder="Ranji" name="lname"> <br><br>
        Age : <input type="number" placeholder="25" name="age"> <br><br>
        weight : <input type="number" placeholder="60 kg" name="weight"> <br><br>
        height : <input type="number" placeholder="170 cm" name="height"> <br><br>

        <input type="submit" value="login">
    </form>-->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 left">
            <img src="../6373594.jpg" alt="BMI">
        </div>
        <div class="col-lg-6 right">
            <h2>BMI calculator</h2>
            <form action="result.php" target="_parent" method="post">
                First Name : <input type="text"  name="fname" required> <br><br>
                Last Name : <input type="text"  name="lname" required> <br><br>
                Age : <input type="number"  name="age" required> <br><br>
                weight : <input type="number"  name="weight" required> <br><br>
                height : <input type="number"  name="height" required> <br><br>
                email : <input type="email"  name="email" required> <br><br>
                password : <input type="password" name="password" required> <br><br>
                <input type="submit" value="sign up">
                <br><br>
                <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
                <br>
            </form>
        </div>
    </div>

</body>
</html>