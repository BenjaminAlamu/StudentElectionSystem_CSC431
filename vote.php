<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vote</title>
</head>
<body>
<form action="form.php" method = "POST" >
            
            <h1 id = "title">Kindly fill out this form</h1>
            
            
            <legend><span id = "number">1</span> Departmental Elections</legend>
            <label>Kindly select who you would like to be your Departmental President</label><br>
            <span class="error"> *<?php   if(isset($_SESSION["preErr"])){
                echo $_SESSION["preErr"];
                };?></span><br>
            
            <fieldset>
                <input type = "radio" id = "kelvin" name = "departmental_President" value="kelvin"><label for = "kelvin" >Kelvin Umechukwu</label><br>
                

                <input type = "radio" id = "dayo" name = "departmental_President" value="dayo"><label for = "dayo" >Oladayo Olumide</label><br>

                <input type = "radio" id = "bolaji" name = "departmental_President" value="bolaji"><label for = "bolaji" >Bolaji Micheal</label><br>
            </fieldset>


            <label>Kindly select who you would like to be your Departmental Secretary</label><br>
            <span class="error"> *<?php   if(isset($_SESSION["secErr"])){
                echo $_SESSION["secErr"];
                };?></span><br>
            
            <fieldset>
                <input type = "radio" id = "omoh" name = "departmental_Secretary" value="omoh"><label for = "omoh" >Omoh David</label><br>

                <input type = "radio" id = "joel" name = "departmental_Secretary" value="joel"><label for = "joel" >Joel Pelumi</label><br>

                <input type = "radio" id = "godwin" name = "departmental_Secretary" value="godwin"><label for = "godwin" >Bassey Godwin</label><br>
            </fieldset>

            <label>Kindly select who you would like to be your Departmental PRO</label><br>
            <span class="error"> *<?php   if(isset($_SESSION["proErr"])){
                echo $_SESSION["proErr"];
                };?></span><br>
            
            <fieldset>
                <input type = "radio" id = "yemisi" name = "departmental_PRO" value="yemisi"><label for = "yemisi" >Ayanbola Yemisi</label><br>

                <input type = "radio" id = "kayode" name = "departmental_PRO" value="kayode"><label for = "kayode" >Kayode Kekere Ekun</label><br>

                <input type = "radio" id = "chris" name = "departmental_PRO" value="chris"><label for = "chris" >Christian Daniels</label><br>
            </fieldset>
            
            
        
            <input type="submit">
        </form>
    
</body>
</html>