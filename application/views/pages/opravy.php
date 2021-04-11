<html>
    <head>
        <title>Opravy a vozidla a náhradní díly</title>
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
        background-image: url(<?php echo base_url();?>images/zam-pokus2.jpg);
} 
input{
    width: 100%;
    height: 5%;
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15px;
    margin: 10px 0px 15px 0px;
    box-shadow: 2px 2px 3px 2px grey;
}
.jumbotron {
        background-image: url(<?php echo base_url();?>images/jumb-pokus.jpg);
         border: 1px;
         border-style: solid;
         border-color: white;
}
.card{
    background-color:#bebecb;
    border: 2px;
    border-style: solid;
    border-color: white;
}
        </style>
    </head>
    <body style="background-color:lightyellow;">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8">
                <div class="text-white"><center><h2><b><u>Aktuální seznam oprav</u></b></h2></center></div>
            <table class="table table-bordered table-striped table-dark">               
    <tr>
      <th scope="col">#</th>
      <th scope="col">Datum</th>
      <th scope="col">Zaměstnanec</th>
      <th scope="col">Popis závady</th>
      <th scope="col">Vyměněné součástky</th>
      <th scope="col">Čas opravy</th>
      <th scope="col">Náklady na opravu</th>
      <th scope="col">Náklady za čas opravy</th>
    </tr>
    <?php foreach ($oprava as $opr) { ?>
        <tr>
            <td><?= $opr->id; ?></td>
            <td><?= $opr->datum; ?></td>
            <td><?= $opr->zamestnanec; ?></td>
            <td><?= $opr->popis_zavady; ?></td>
            <td><?= $opr->vymenene_soucastky; ?></td>
            <td><?= $opr->cas_opravy; ?></td>
            <td><?= $opr->naklady_na_opravu; ?></td>
            <td><?= $opr->naklady_za_cas; ?></td>
        </tr>
    <?php } ?>
        </table>
                <center>
            <button onClick="window.location.reload();">Aktualizovat stránku (pro aktuální data v databázi)</button>
            </center>
                <div><br>&nbsp</div>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-white">
                <a class="nav-link text-dark" href="formular">Zpět na formuláře</a>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Úprava dat o opravách v databázi </h4>
        
        <form action="" method="POST">
            <input type="text" name="id" placeholder="Zadejte platné ID"/><br/>
            <input type="text" name="datum" placeholder="Zadejte nový/aktuální datum opravy"/><br/>
            <input type="text" name="zamestnanec" placeholder="Zadejte nového/aktuálního zaměstnance"/><br/>
            <input type="text" name="popis_zavady" placeholder="Zadejte novoý/aktuální popis závady"/><br/>
            <input type="text" name="vymenene_soucastky" placeholder="Zadejte nové/aktuálně vyměněné součástky"/><br/>
            <input type="text" name="cas_opravy" placeholder="Zadejte nový/aktuální čas opravy"/><br/>
            <input type="text" name="naklady_na_opravu" placeholder="Zadejte nové/aktuální náklady na opravu"/><br/>
            <input type="text" name="naklady_za_cas" placeholder="Zadejte nové/aktuální náklady za čas opravy"/><br/>
            
            <input type="submit" name="update" value="Upravit data">
        </form>
    </center>
        </div>
        </div>
            </div>
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Smazání dat z databáze zadaním platného ID </h4>
        <form action="" method="post">

            &nbsp;<input type="text" name="id" placeholder="Zadejte platné ID řádku pro jeho smazání" required><br><br>

            <input type="submit" name="delete" value="Smazat data">

        </form>
    </center>
            </div>
            </div>
                <div><br>&nbsp</div>
                 <img src="<?php echo base_url ('images/opravy.jpg'); ?>" class="rounded" width="457" height="295" alt="Oprava automobilu">     
            </div>
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Přidání nové opravy do databáze </h4>
        <form action="" method="POST">
            <input type="text" name="datum" placeholder="Zadejte datum opravy"/><br/>
            <input type="text" name="zamestnanec" placeholder="Zadejte zaměstnance"/><br/>
            <input type="text" name="popis_zavady" placeholder="Zadejte popis závady"/><br/>
            <input type="text" name="vymenene_soucastky" placeholder="Zadejte vyměněné součástky"/><br/>
            <input type="text" name="cas_opravy" placeholder="Zadejte čas opravy"/><br/>
            <input type="text" name="naklady_na_opravu" placeholder="Zadejte náklady na opravu"/><br/>
            <input type="text" name="naklady_za_cas" placeholder="Zadejte náklady za čas opravy"/><br/>
            
            <input type="submit" name="insert" value="Přidat data">
        </form>
    </center>
      <div><br>&nbsp</div>
            </div>
            </div>
            </div>
    </div>
        <div><br>&nbsp</div>
        <div class="text-white">
        ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <div><br>&nbsp</div>
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8">
                <div class="text-white"><center><h2><b><u>Aktuální seznam vozidel</u></b></h2></center></div>
            <table class="table table-bordered table-striped table-dark">               
    <tr>
      <th scope="col">#</th>
      <th scope="col">Registrační značka</th>
      <th scope="col">Výrobce</th>
      <th scope="col">Typ vozidla</th>
      <th scope="col">Rok výroby</th>
      <th scope="col">Barva vozidla</th>
      <th scope="col">Obsah motoru</th>
      <th scope="col">Typ převodovky</th>
    </tr>
    <?php foreach ($vozidla as $voz) { ?>
        <tr>
            <td><?= $voz->id; ?></td>
            <td><?= $voz->reg_znacka; ?></td>
            <td><?= $voz->vyrobce; ?></td>
            <td><?= $voz->typ; ?></td>
            <td><?= $voz->rok_vyroby; ?></td>
            <td><?= $voz->barva; ?></td>
            <td><?= $voz->obsah_motoru; ?></td>
            <td><?= $voz->typ_prevodovky; ?></td>
        </tr>
    <?php } ?>
        </table>
                <center>
            <button onClick="window.location.reload();">Aktualizovat stránku (pro aktuální data v databázi)</button>
            </center>
                <div><br>&nbsp</div>
            </div>
            <div class="col-2">
            
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Úprava dat o vozidlech v databázi </h4>
        
        <form action="" method="POST">
            <input type="text" name="id" placeholder="Zadejte platné ID"/><br/>
            <input type="text" name="reg_znacka" placeholder="Zadejte novou/aktuální registrační značku"/><br/>
            <input type="text" name="vyrobce" placeholder="Zadejte nového/aktuálního výrobce vozidla"/><br/>
            <input type="text" name="typ" placeholder="Zadejte nový/aktuální typ vozidla"/><br/>
            <input type="text" name="rok_vyroby" placeholder="Zadejte nový/aktuální rok vyroby"/><br/>
            <input type="text" name="barva" placeholder="Zadejte novou/aktuální barvu vozidla"/><br/>
            <input type="text" name="obsah_motoru" placeholder="Zadejte nový/aktuální obsah motoru"/><br/>
            <input type="text" name="typ_prevodovky" placeholder="Zadejte nový/aktuální typ převodovky"/><br/>
            
            <input type="submit" name="update2" value="Upravit data">
        </form>
    </center>
        </div>
        </div>
            </div>
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Smazání dat z databáze zadaním platného ID </h4>
        <form action="" method="post">

            &nbsp;<input type="text" name="id" placeholder="Zadejte platné ID řádku pro jeho smazání" required><br><br>

            <input type="submit" name="delete2" value="Smazat data">

        </form>
    </center>
            </div>
            </div>
                <div><br>&nbsp</div>
                 <img src="<?php echo base_url ('images/vozidla.jpg'); ?>" class="rounded" width="457" height="295" alt="Automobily k opravě">     
            </div>
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Přidání nových vozidel do databáze </h4>
        <form action="" method="POST">
            <input type="text" name="reg_znacka" placeholder="Zadejte registrační značku"/><br/>
            <input type="text" name="vyrobce" placeholder="Zadejte výrobce vozidla"/><br/>
            <input type="text" name="typ" placeholder="Zadejte typ vozidla"/><br/>
            <input type="text" name="rok_vyroby" placeholder="Zadejte rok vyroby"/><br/>
            <input type="text" name="barva" placeholder="Zadejte barvu vozidla"/><br/>
            <input type="text" name="obsah_motoru" placeholder="Zadejte obsah motoru"/><br/>
            <input type="text" name="typ_prevodovky" placeholder="Zadejte typ převodovky"/><br/>
            
            <input type="submit" name="insert2" value="Přidat data">
        </form>
    </center>
      <div><br>&nbsp</div>
            </div>
            </div>
            </div>
    </div>
        <div><br>&nbsp</div>
        <div class="text-white">
        ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <div><br>&nbsp</div>
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8">
                <div class="text-white"><center><h2><b><u>Aktuální seznam náhradních dílů</u></b></h2></center></div>
            <table class="table table-bordered table-striped table-dark">               
    <tr>
      <th scope="col">#</th>
      <th scope="col">Název náhradního dílu</th>
      <th scope="col">Auto</th>
      <th scope="col">Cena náhradního dílu</th>
      <th scope="col">Počet kusů na skladě</th>
    </tr>
    <?php foreach ($nahradni_dil as $nahr) { ?>
        <tr>
            <td><?= $nahr->id; ?></td>
            <td><?= $nahr->nazev_dilu; ?></td>
            <td><?= $nahr->auto; ?></td>
            <td><?= $nahr->cena; ?></td>
            <td><?= $nahr->pocet_kusu_na_sklade; ?></td>
        </tr>
    <?php } ?>
        </table>
            <center>
            <button onClick="window.location.reload();">Aktualizovat stránku (pro aktuální data v databázi)</button>
            </center>
                <div><br>&nbsp</div>
            </div>
            <div class="col-2">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Úprava dat o náhradních dílech v databázi </h4>
        
        <form action="" method="POST">
            <input type="text" name="id" placeholder="Zadejte platné ID"/><br/>
            <input type="text" name="nazev_dilu" placeholder="Zadejte nový/aktuální název náhradního dílu"/><br/>
            <input type="text" name="auto" placeholder="Zadejte nový/aktuální název vozidla"/><br/>
            <input type="text" name="cena" placeholder="Zadejte novou/aktuální cenu náhradního dílu"/><br/>
            <input type="text" name="pocet_kusu_na_sklade" placeholder="Zadejte nový/aktuální počet kusů na skladě"/><br/>
            
            <input type="submit" name="update3" value="Upravit data">
        </form>
    </center>
        </div>
        </div>
            </div>
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Smazání dat z databáze zadaním platného ID </h4>
        <form action="" method="post">

            &nbsp;<input type="text" name="id" placeholder="Zadejte platné ID řádku pro jeho smazání" required><br><br>

            <input type="submit" name="delete3" value="Smazat data">

        </form>
    </center>
            </div>
            </div>
                <div><br>&nbsp</div>
                 <img src="<?php echo base_url ('images/nahrdil.png'); ?>" class="rounded" width="457" height="295" alt="Náhradní díly">     
            </div>
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Přidání nových náhradních dílů do databáze </h4>
        <form action="" method="POST">
            <input type="text" name="nazev_dilu" placeholder="Zadejte název náhradního dílu"/><br/>
            <input type="text" name="auto" placeholder="Zadejte název vozidla"/><br/>
            <input type="text" name="cena" placeholder="Zadejte cenu náhradního dílu"/><br/>
            <input type="text" name="pocet_kusu_na_sklade" placeholder="Zadejte počet kusů na skladě"/><br/>
            
            <input type="submit" name="insert3" value="Přidat data">
        </form>
    </center>
      <div><br>&nbsp</div>
            </div>
            </div>
            </div>
    </div>
        <div><br>&nbsp</div>
        <div class="row">
            <div class="col-12">
        <div class="jumbotron bg-dark text-white">
            <h4><u>Kontaktní informace k autoservisu</u></h4> 
  <hr class="my-3">
  <p>Tento projekt vypracoval Filip Mrkva @2021</p> 
</div>
            </div>
            </div>
    </body>
</html>

<?php

// update dat v databázi

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'auto_servis');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    
    $query = "UPDATE `opravy` SET datum='$_POST[datum]',zamestnanec='$_POST[zamestnanec]',popis_zavady='$_POST[popis_zavady]',vymenene_soucastky='$_POST[vymenene_soucastky]',cas_opravy='$_POST[cas_opravy]',naklady_na_opravu='$_POST[naklady_na_opravu]',naklady_za_cas='$_POST[naklady_za_cas]' where id='$_POST[id]' ";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data upravena") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data se nepodařilo upravit") </script>';
    }
}
?>

<?php

// update dat v databázi

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'auto_servis');

if(isset($_POST['update2']))
{
    $id = $_POST['id'];
    
    $query = "UPDATE `vozidlo` SET reg_znacka='$_POST[reg_znacka]',vyrobce='$_POST[vyrobce]',typ='$_POST[typ]',rok_vyroby='$_POST[rok_vyroby]',barva='$_POST[barva]',obsah_motoru='$_POST[obsah_motoru]',typ_prevodovky='$_POST[typ_prevodovky]' where id='$_POST[id]' ";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data upravena") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data se nepodařilo upravit") </script>';
    }
}
?>

<?php

// update dat v databázi

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'auto_servis');

if(isset($_POST['update3']))
{
    $id = $_POST['id'];
    
    $query = "UPDATE `nahradni_dily` SET nazev_dilu='$_POST[nazev_dilu]',auto='$_POST[auto]',cena='$_POST[cena]',pocet_kusu_na_sklade='$_POST[pocet_kusu_na_sklade]' where id='$_POST[id]' ";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data upravena") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data se nepodařilo upravit") </script>';
    }
}
?>


<?php

// smazání dat z databáze
// php code to Delete data from mysql database 

if(isset($_POST['delete']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "auto_servis";
    
    // get id to delete
    $id = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql delete query 
    $query = "DELETE FROM opravy WHERE id = $id";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo '<script type="text/javascript"> alert("Data byla úspěšně smazána") </script>';
    }else{
        echo '<script type="text/javascript"> alert("Data se nepodařilo smazat") </script>';
    }
    mysqli_close($connect);
}

?>

<?php

// smazání dat z databáze
// php code to Delete data from mysql database 

if(isset($_POST['delete2']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "auto_servis";
    
    // get id to delete
    $id = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql delete query 
    $query = "DELETE FROM vozidlo WHERE id = $id";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo '<script type="text/javascript"> alert("Data byla úspěšně smazána") </script>';
    }else{
        echo '<script type="text/javascript"> alert("Data se nepodařilo smazat") </script>';
    }
    mysqli_close($connect);
}

?>

<?php

// smazání dat z databáze
// php code to Delete data from mysql database 

if(isset($_POST['delete3']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "auto_servis";
    
    // get id to delete
    $id = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql delete query 
    $query = "DELETE FROM nahradni_dily WHERE id = $id";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo '<script type="text/javascript"> alert("Data byla úspěšně smazána") </script>';
    }else{
        echo '<script type="text/javascript"> alert("Data se nepodařilo smazat") </script>';
    }
    mysqli_close($connect);
}

?>

<?php

// přidávání dat do databáze

    $connect = mysqli_connect("localhost","root","","auto_servis");
    if(isset($_POST['insert'])) {
        
        $datum = $_POST['datum'];
        $zamestnanec = $_POST['zamestnanec'];
        $popis_zavady = $_POST['popis_zavady'];
        $vymenene_soucastky = $_POST['vymenene_soucastky'];
        $cas_opravy = $_POST['cas_opravy'];
        $naklady_na_opravu = $_POST['naklady_na_opravu'];
        $naklady_za_cas = $_POST['naklady_za_cas'];
        
    if(!empty($datum) && !empty($zamestnanec) && !empty($popis_zavady) && !empty($vymenene_soucastky) && !empty($cas_opravy) && !empty($naklady_na_opravu) && !empty($naklady_za_cas) )   {
    
        
        $sql = "INSERT INTO `opravy`(`datum`, `zamestnanec`, `popis_zavady`,`vymenene_soucastky`, `cas_opravy`, `naklady_na_opravu`, `naklady_za_cas`)"
                               . " VALUES ('$datum','$zamestnanec','$popis_zavady','$vymenene_soucastky','$cas_opravy','$naklady_na_opravu','$naklady_za_cas')" ;
    $qry = mysqli_query($connect, $sql);
    if($qry){
        echo '<script type="text/javascript"> alert("Data byla úspěšně přidána do databáze") </script>';
    }   
        
    } else {
        echo '<script type="text/javascript"> alert("Všechny kolonky musí být vyplněné") </script>';
    }
     
    }
    mysqli_close($connect);
?>

<?php

// přidávání dat do databáze

    $connect = mysqli_connect("localhost","root","","auto_servis");
    if(isset($_POST['insert2'])) {
        
        $reg_znacka = $_POST['reg_znacka'];
        $vyrobce = $_POST['vyrobce'];
        $typ = $_POST['typ'];
        $rok_vyroby = $_POST['rok_vyroby'];
        $barva = $_POST['barva'];
        $obsah_motoru = $_POST['obsah_motoru'];
        $typ_prevodovky = $_POST['typ_prevodovky'];
        
    if(!empty($reg_znacka) && !empty($vyrobce) && !empty($typ) && !empty($rok_vyroby) && !empty($barva) && !empty($obsah_motoru) && !empty($typ_prevodovky) )   {
    
        
        $sql = "INSERT INTO `vozidlo`(`reg_znacka`, `vyrobce`, `typ`,`rok_vyroby`, `barva`, `obsah_motoru`, `typ_prevodovky`)"
                               . " VALUES ('$reg_znacka','$vyrobce','$typ','$rok_vyroby','$barva','$obsah_motoru','$typ_prevodovky')" ;
    $qry = mysqli_query($connect, $sql);
    if($qry){
        echo '<script type="text/javascript"> alert("Data byla úspěšně přidána do databáze") </script>';
    }   
        
    } else {
        echo '<script type="text/javascript"> alert("Všechny kolonky musí být vyplněné") </script>';
    }
     
    }
    mysqli_close($connect);
?>

<?php

// přidávání dat do databáze

    $connect = mysqli_connect("localhost","root","","auto_servis");
    if(isset($_POST['insert3'])) {
        
        $nazev_dilu = $_POST['nazev_dilu'];
        $auto = $_POST['auto'];
        $cena = $_POST['cena'];
        $pocet_kusu_na_sklade = $_POST['pocet_kusu_na_sklade'];
        
    if(!empty($nazev_dilu) && !empty($auto) && !empty($cena) && !empty($pocet_kusu_na_sklade) )   {
    
        
        $sql = "INSERT INTO `nahradni_dily`(`nazev_dilu`, `auto`, `cena`,`pocet_kusu_na_sklade`)"
                               . " VALUES ('$nazev_dilu','$auto','$cena','$pocet_kusu_na_sklade')" ;
    $qry = mysqli_query($connect, $sql);
    if($qry){
        echo '<script type="text/javascript"> alert("Data byla úspěšně přidána do databáze") </script>';
    }   
        
    } else {
        echo '<script type="text/javascript"> alert("Všechny kolonky musí být vyplněné") </script>';
    }
     
    }
    mysqli_close($connect);
?>

    </body>
</html>
