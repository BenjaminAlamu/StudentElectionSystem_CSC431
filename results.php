<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Election Result</title>
</head>
<body>
        <?php include ("database.php"); ?>
        <h1>Here are the results</h1>
        <h2>Presidential Results</h2>
        
        <p>Kelvin Umechukwu  <span><?php 
        $db = $conn -> query("SELECT COUNT(*) FROM president_kelvin");
        $db = $db -> fetchAll(PDO::FETCH_NUM);
        foreach($db as $result){
            echo $result[0];
        }
        ?> vote(s)</span></p>

        <p>Oladayo Olumide  <span><?php 
        $db = $conn -> query("SELECT COUNT(*) FROM president_dayo");
        $db = $db -> fetchAll(PDO::FETCH_NUM);
        foreach($db as $result){
            echo $result[0];
        }
        ?> vote(s)</span></p>

        <p>Bolaji Micheal  <span><?php 
        $db = $conn -> query("SELECT COUNT(*) FROM president_bolaji");
        $db = $db -> fetchAll(PDO::FETCH_NUM);
        foreach($db as $result){
            echo $result[0];
        }
        ?> vote(s)</span></p>

        <h2>Secretary Results</h2>
        
        <p>Omoh David  <span><?php 
        $db = $conn -> query("SELECT COUNT(*) FROM secretary_omoh");
        $db = $db -> fetchAll(PDO::FETCH_NUM);
        foreach($db as $result){
            echo $result[0];
        }
        ?> vote(s)</span></p>

        <p>Joel Pelumi  <span><?php 
        $db = $conn -> query("SELECT COUNT(*) FROM secretary_joel");
        $db = $db -> fetchAll(PDO::FETCH_NUM);
        foreach($db as $result){
            echo $result[0];
        }
        ?> vote(s)</span></p>

        <p>Bassey Godwin  <span><?php 
        $db = $conn -> query("SELECT COUNT(*) FROM secretary_godwin");
        $db = $db -> fetchAll(PDO::FETCH_NUM);
        foreach($db as $result){
            echo $result[0];
        }
        ?> vote(s)</span></p>
        

        <h2>PRO Results</h2>
        
        <p>Ayanbola Yemisi  <span><?php 
        $db = $conn -> query("SELECT COUNT(*) FROM pro_yemisi");
        $db = $db -> fetchAll(PDO::FETCH_NUM);
        foreach($db as $result){
            echo $result[0];
        }
        ?> vote(s)</span></p>

        <p>Kekere Ekun Kayode  <span><?php 
        $db = $conn -> query("SELECT COUNT(*) FROM pro_kayode");
        $db = $db -> fetchAll(PDO::FETCH_NUM);
        foreach($db as $result){
            echo $result[0];
        }
        ?> vote(s)</span></p>

        <p>Christain Daniel  <span><?php 
        $db = $conn -> query("SELECT COUNT(*) FROM pro_chris");
        $db = $db -> fetchAll(PDO::FETCH_NUM);
        foreach($db as $result){
            echo $result[0];
        }
        ?> vote(s)</span></p>

    
</body>
</html>