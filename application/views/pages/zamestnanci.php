<html>
    <head>
        <title>Formuláře</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet/less" type="text/css" href="styles.less">
        <script src="less.js" type="text/javascript"></script>
        <style>
body {
	background-image: url("images/.jpg");
        background-repeat:no-repeat;
        background-size:cover;
} 
        </style>
    </head>
    <body style="background-color:lightyellow;">
        <div class="row">
            <div class="col-12">
<?php
    $connect = mysqli_connect("localhost","root","","autoservis");
    if(isset($_POST['submitinserdetails'])) {
        
        $jméno = $_POST['jméno'];
        $příjmení = $_POST['příjmení'];
        $osobní_číslo = $_POST['osobní_číslo'];
        
    if(!empty($jméno) && !empty($příjmení) && !empty($osobní_číslo)  )   {
    
        
        $sql = "INSERT INTO `zaměstnanci`(`jméno`, `příjmení`, `osobní_číslo`)"
                               . " VALUES ('$jméno','$příjmení','$osobní_číslo)" ;
    $qry = mysqli_query($connect, $sql);
    if($qry){
        echo "Zaměstnanec byl úspěšně přidán do databáze";
    }   
        
    } else {
        echo "Všechny kolonky musí být vyplněné";
    }
    
    }
?>
            </div>
        </div>
        <div class="row">
        <div class="col-2">
        </div>
            
        <div class="col-8">
            <h2><b><u>Aktuální seznam zaměstnanců:</u></b></h2>
            <table class="table table-bordered table-striped table-dark">               
    <tr>
      <th scope="col">#</th>
      <th scope="col">Jméno</th>
      <th scope="col">Příjmení</th>
      <th scope="col">Osobní číslo</th>
    </tr>
    <?php foreach ($zamestnanec as $zam) { ?>
        <tr>
            <td><?= $zam->idzaměstnanci; ?></td>
            <td><?= $zam->jméno; ?></td>
            <td><?= $zam->příjmení; ?></td>
            <td><?= $zam->osobní_číslo; ?></td>
        </tr>
    <?php } ?>
        </table>
        </div>
            <div class="col-2">
                <button type="button" class="btn btn-dark">
                <a class="nav-link text-light" href="formular">Zpět na formuláře</a>
            </div>  
        </div>
    </body>
</html>
