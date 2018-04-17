<?php
// Start the session
session_start();

include("database.php");

$result = $conn->query("SELECT matric FROM vote"); 

//A boolean to check if the matric number has voted already
$voted = false;

$result =  $result -> fetchAll(PDO::FETCH_ASSOC);

foreach($result as $itm){

    if ($itm["matric"] == $_SESSION["matricNumber"]){
        $voted = true;  
    }
}

if($voted){
    $_SESSION["voteErr"] = "You can only vote once, However feel free to view the current results";
    header('Location:dashboard.php');
}else{
    header('Location:vote.php');
    $_SESSION["voteErr"] = "";
}

?>