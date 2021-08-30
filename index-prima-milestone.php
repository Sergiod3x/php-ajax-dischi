
<?php 

/*

Esercizio di oggi:
cartella/repo php-ajax-dischi
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, Sass, JS, VueJS, PHP

Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi. => index-prima-milestone.php

Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.

Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<body>


<div class="main">
    <div class="navbar">
        <i class="fab menu fa-spotify"></i>
    </div>
        <div class="container ">
            <div class="row">

            
<?php 

require_once __DIR__ . "/database/database.php";


foreach($database as $ad){
    $img = $ad['poster'];
    $title = $ad['title'];
    $author = $ad['author'];
    $year = $ad['year'];

    echo "<div class='album tac'>
            <a href=www.google.it><img src={$img}></a>
            <h4>{$title}</h4>
            <div class='subtitle'>
                <h5>{$author}</h5>
                <h5>{$year}</h5>

            </div>

          </div>";

    
    // echo "<br/>";
    // echo "<hr>";
}



?>
            
                </div>
            </div>
        </div> 

    


</body>
</html>