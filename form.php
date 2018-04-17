<?php
session_start();

$_SESSION["preErr"] = "";
$_SESSION["secErr"] = "";
$_SESSION["proErr"] = "";

$departmentalPresident = "";
$departmentalSecretary = "";
$departmentalPRO = "";

$redirectBack = false;

//Check if a person was picked for the position of departmental President
if (isset($_POST["departmental_President"])){
    $departmentalPresident = $_POST["departmental_President"];
    $_SESSION["preErr"] = "";
}

else{
    $_SESSION["preErr"] = "Kindly select an option";
    $redirectBack = true;
}

if (isset($_POST["departmental_Secretary"])){
    $departmentalSecretary = $_POST["departmental_Secretary"];
    $_SESSION["secErr"] = "";
}

else{
    $_SESSION["secErr"] = "Kindly select an option";
    $redirectBack = true;
}

if (isset($_POST["departmental_PRO"])){
    $departmentalPRO = $_POST["departmental_PRO"];
    $_SESSION["proErr"] = "";
}

else{
    $_SESSION["proErr"] = "Kindly select an option";
    $redirectBack = true;
}

if($redirectBack){
    header('Location:vote.php');
}

else{
    echo $departmentalSecretary;
    //Update database
    $_SESSION["preErr"] = "";
    $_SESSION["secErr"] = "";
    $_SESSION["proErr"] = "";

    include("database.php");


    //Update departmental president
    if($departmentalPresident == "kelvin"){
        $statement = "INSERT INTO president_" . "$departmentalPresident (matric) VALUES ( $_SESSION[matricNumber])";
        $conn->exec($statement);

    }
    elseif ($departmentalPresident == "dayo"){
        $statement = "INSERT INTO president_" . "$departmentalPresident (matric) VALUES ( $_SESSION[matricNumber])";
        $conn->exec($statement);
    }
    elseif ($departmentalPresident == "dayo"){
        $statement = "INSERT INTO president_" . "$departmentalPresident (matric) VALUES ( $_SESSION[matricNumber])";
        $conn->exec($statement);
    }else{
        //This should never happen
        header('Location:vote.php');
        $_SESSION["preErr"] = "";
        $_SESSION["secErr"] = "";
        $_SESSION["proErr"] = "";
    }

    //Update departmental secretary
    if($departmentalSecretary == "omoh"){
        $statement = "INSERT INTO secretary_" . "$departmentalSecretary (matric) VALUES ( $_SESSION[matricNumber])";
        $conn->exec($statement);

    }
    elseif ($departmentalSecretary == "joel"){
        $statement = "INSERT INTO secretary_" . "$departmentalSecretary (matric) VALUES ( $_SESSION[matricNumber])";
        $conn->exec($statement);
    }
    elseif ($departmentalSecretary == "godwin"){
        $statement = "INSERT INTO secretary_" . "$departmentalSecretary (matric) VALUES ( $_SESSION[matricNumber])";
        $conn->exec($statement);
     }
     else{
        //This should never happen
        header('Location:vote.php');
        $_SESSION["preErr"] = "";
        $_SESSION["secErr"] = "";
        $_SESSION["proErr"] = "";
    }

    //Update departmental PRO
    if($departmentalPRO == "yemisi"){
        $statement = "INSERT INTO pro_" . "$departmentalPRO (matric) VALUES ( $_SESSION[matricNumber])";
        $conn->exec($statement);

    }
    elseif ($departmentalPRO == "kayode"){
        $statement = "INSERT INTO pro_" . "$departmentalPRO (matric) VALUES ( $_SESSION[matricNumber])";
        $conn->exec($statement);
    }
    elseif ($departmentalPRO == "chris"){
        $statement = "INSERT INTO pro_" . "$departmentalPRO (matric) VALUES ( $_SESSION[matricNumber])";
        $conn->exec($statement);
     }
     else
     {
        //This should never happen
        header('Location:vote.php');
        $_SESSION["preErr"] = "";
        $_SESSION["secErr"] = "";
        $_SESSION["proErr"] = "";
    }

    $_SESSION["voteErr"] = "Vote Successfully submitted. You can check the current results";
    $statement = "INSERT INTO vote (matric) VALUES ( $_SESSION[matricNumber])";
    $conn->exec($statement);
    header('Location:dashboard.php');
}
?>