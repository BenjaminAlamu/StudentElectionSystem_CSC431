<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>

<?php
$string = "23fff4";
if (!preg_match('/[^0-9]/', $string)) // '/[^a-z\d]/i' should also work.
{
  echo "Hello";
}

?>
    <form action="login.php" method="post">
        <span>Matric Number:</span><span class="error"> *<?php if (isset($_SESSION["matricErr"])){
         echo   $_SESSION["matricErr"];
        };?></span><br>
        <input type="text" name="matric" placeholder="Enter your matric number here:">
        <input type="submit">
    </form>

<!-- <?php
// Start the session
session_destroy();

?> -->
</body>

</html>