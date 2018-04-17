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
    <link rel="stylesheet" type="css/styles.css" href="styles.css">
    <title>User Dashboard</title>
</head>
<body>

<div class="banner">
		<div class="typed_wrap">
			<h1> Kindly select an option</h1>
		</div>
	</div>
</div>

<form action="confirmvote.php" method="post">
<input type="submit" value = "Cast Vote">
</form>

<form action="results.php" method="post">
<input type="submit" value = "View Results">
</form>

    <span class="error"> <?php if (isset($_SESSION["voteErr"])){
        echo   $_SESSION["voteErr"];
       };?></span>
    
</body>
<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>