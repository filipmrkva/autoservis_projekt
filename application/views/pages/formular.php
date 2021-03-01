<?php
    $connect = mysqli_connect("localhost","root","","knihy_os");
    if(isset($_POST['submitinserdetails'])) {
        
        $nazev_knihy = $_POST['nazev_knihy'];
        $autor = $_POST['autor'];
        $anotace = $_POST['anotace'];
        $kategorie_id_kategorie = $_POST['kategorie_id_kategorie'];
        
    if(!empty($nazev_knihy) && !empty($autor) && !empty($anotace) && !empty($kategorie_id_kategorie)  )   {
    
        
        $sql = "INSERT INTO `knihy`(`nazev_knihy`, `autor`, `anotace`, `kategorie_id_kategorie`)"
                               . " VALUES ('$nazev_knihy','$autor','$anotace','$kategorie_id_kategorie')" ;
    $qry = mysqli_query($connect, $sql);
    if($qry){
        echo "Kniha byla úspěšně přidána";
    }   
        
    } else {
        echo "Všechny kolonky musí být vyplněné";
    }
    
    }
?>
<html>
    <head>
        <title>Formulář</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    body {
     text-align: center;
    }
    </style>
    </head>
    <body style="background-color:lightblue;">
        <h2>Přidání knihy:</h2>
        <form action="" method="POST">
            Název knihy:<br>
<input type="text" name="nazev_knihy"><br >Autor:<br >
<input type="text" name="autor"><br >Anotace:<br >
<input type="text" name="anotace"><br >Kategorie:<br >
<input type="text" name="kategorie_id_kategorie"><br ><br >
<input type="submit" name="submitinserdetails" value="Odeslat">
</form>
        <h3><u>Druhy kategorií:</u></h3>
        <h5>
            <p><mark>1</mark> - Světová a česká literatura do konce 18. století</p>
    <p><mark>2</mark> - Světová a česká 19. století</p>
    <p><mark>3</mark> - Světová literatura 20. a 21. století</p>
    <p><mark>4</mark> - Česká literatura 20. a 21. století</p>
        </h5>
    </body>
</html>
