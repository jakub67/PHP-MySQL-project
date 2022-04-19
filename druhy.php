<?php

    $connection=mysqli_connect("localhost","zemanekj","4fArXa7yFrIRB","zemanekj");
    if($connection){
        echo "Jsme propojeni";
    } else{
        echo "Neco se pokazilo";
    }

    
    if(isset($_POST["submit"])){
        $isbn=addslashes($_POST["isbn"]);
        $jmeno=addslashes($_POST["jmeno"]);
        $prijmeni=addslashes($_POST["prijmeni"]);
        $nazev=addslashes($_POST["nazev"]);
        $popis=addslashes($_POST["popis"]);

        mysqli_query($connection,"SET NAMES 'utf8'");
        $query= "INSERT INTO tabulka1(isbn,jmeno,prijmeni,nazev,popis) VALUES('$isbn','$jmeno','$prijmeni','$nazev','$popis')";
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
    <div class="prvni">
        <form action="druhy.php" method="post">
        <input type="text" name="isbn" placeholder="Zadej isbn"><br>
        <input type="text" name="jmeno" placeholder="Jméno autora"><br>
        <input type="text" name="prijmeni" placeholder="Přijmení autora"><br>
        <input type="text" name="nazev" placeholder="Název knihy"><br>
        <textarea name="popis"  cols="20" rows="3" placeholder="Popis"></textarea><br>
        <input type="submit" name="submit" value="Vlož knihu" class="vloz">
    </form><br>

    <a href="https://zemanek.vas-webmaster.cz/PHPBS/treti.php">Přehled všech knih</a>
    <a href="https://zemanek.vas-webmaster.cz/PHPBS/ctvrty.php">Najdi svou knihu</a><br>
    </div>
    

<?php
    mysqli_free_result($result);
    mysqli_close($connection);
?>
    
</body>
</html>