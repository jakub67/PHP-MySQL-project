<?php

    $connection=mysqli_connect("localhost","zemanekj","4fArXa7yFrIRB","zemanekj");
    if($connection){
        echo "Jsme propojeni";
    } else{
        echo "Neco se pokazilo";
    }

    if(isset($_POST["submit"])){
        
        mysqli_query($connection,"SET NAMES 'utf8'");
        $query="SELECT * FROM  tabulka1";
        $result= mysqli_query($connection,$query);
        if(!$result){
            die("Dotaz do databaze selhal");              
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato&family=Merriweather:wght@700&family=Raleway:wght@200&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <h1>Databáze knih</h1>
    <form action="treti.php" method="post">
        <input type="submit" name="submit" value="Zobraz knihy" class="vloz">
    </form>

    <?php
    
    echo "<table border='1' cellpadding='5' width='80%'>";
    while($row = mysqli_fetch_array($result)){         
        echo "<tr><td>".htmlspecialchars($row["nazev"])."</td>";
        echo "<td>".htmlspecialchars($row["jmeno"])."</td>";
        echo "<td>".htmlspecialchars($row["prijmeni"])."</td>";
        echo "<td>".htmlspecialchars($row["popis"])."</td>";
        echo "<td>".htmlspecialchars($row["isbn"])."</td></tr>";
    }
    echo "</table>";
    
    
    ?>
    <br><br>
    <div class="druhy">
        <a href="https://zemanek.vas-webmaster.cz/PHPBS/druhy.php">+Vlož knihu</a>
        <a href="https://zemanek.vas-webmaster.cz/PHPBS/ctvrty.php">Najdi svou knihu</a><br>
    </div>
    

    <?php
        mysqli_free_result($result);
        mysqli_close($connection);
    ?>
    
</body>
</html>