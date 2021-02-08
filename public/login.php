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

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 right">
            <h2>Login page</h2>
            <form action="lresult.php" target="_parent" method="post">
                email : <input type="email"  name="email" required> <br><br>
                password : <input type="password" name="password" required> <br><br>
                <input type="submit" value="log in">
            </form>
        </div>
    </div>

</body>
</html>