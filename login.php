<?php

// Start the session
session_start();

$matricErr = "";
$matricNumber = "";
if(isset( $_POST["matric"])  ) {
    $matricNumber = $_POST["matric"];


    if (!preg_match('/[^0-9]/', $matricNumber)){

        //Check the lenght of the matric number. Valid matric number have exactly 11 numbers 
        if(strlen($matricNumber) != 10){
        $_SESSION["matricErr"] = "Matric number is invalid,matric number contain only 11 digits";
        header('Location:index.php');
        }

        else{
            header('Location:dashboard.php');
            $_SESSION["matricErr"] = "";
            $_SESSION["matricNumber"] = $matricNumber;
        }

    }
    else{
        //Matric numbers cannot contain letters or special characters
        $_SESSION["matricErr"] = "Matric number is invalid,matric number contains only numbers";
        header('Location:index.php');
    }



    
 }


?>