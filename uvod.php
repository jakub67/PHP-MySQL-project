<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato&family=Merriweather:wght@700&family=Raleway:wght@200&family=Righteous&display=swap" rel="stylesheet">
</head>
<body>
    <div class="obal">       
        <h1 class="d-none d-lg-block">Aplikace kniha</h1>
        <h2 class="display-4">Vaše databáze knih</h2>
    </div>
    <div class="container">    
        <div class="row d-flex justify-content-center align-items-center prv">
            <div class="col-sm, col-6-md, col-3-lg">
               <a class="btn btn-outline-success btn-lg text-white" href="https://zemanek.vas-webmaster.cz/PHPBS/druhy.php" role="button">+Vlož knihu</a> 
            </div>
            <div class="col-sm, col-6-md, col-3-lg">
                <a class="btn btn-outline-success btn-lg text-white" href="https://zemanek.vas-webmaster.cz/PHPBS/treti.php" role="button">+Najdi knihu</a>
            </div>
            <div class="col-sm, col-6-md, col-3-lg">
                <a class="btn btn-outline-success btn-lg text-white" href="https://zemanek.vas-webmaster.cz/PHPBS/ctvrty.php" role="button">Seznam knih</a>
            </div>
            <div class="col-sm, col-6-md, col-3-lg">
                <a class="btn btn-outline-success btn-lg text-white" href="" role="button">-Odeber knihu</a>
            </div>
            
        </div>       
    </div>
    <div class="footer">
        <p class="text-align-center"> Aplikace kniha slouží ke správě Vaší databáze knih. Knihy je možné vkládat, eviduje se ISBN,
        název knihy, autorovo křestní jméno a příjmení a připojte i krátký popis. Pod seznamem knih najdete 
        všechny knihy, které databáze obsahuje v přehledné tabulce. Dále je možné v databázi vyhledat 
        příslušnou knihu podle zadaných kritérií. Jako uložiště dat slouží databáze MySQL.</p> 
    </div>
        
   
    
    
</body>
</html>