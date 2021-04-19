<html>
    <head>
        <title>Zaměstnanci</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet/less" type="text/css" href="styles.less">
        <script src="less.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        
        <script>
            $(document).ready(function(){
                $("#div_refresh").load("zamestnanci.php");
               setInterval(function() {
                   $("#div_refresh").load("zamestnanci.php");
               }, 1000);
           }};
        </script>
        <style>
body { 
    background-image: url(<?php echo base_url();?>images/home-pokusx.jpg);
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
        <div class="col-2">
        </div>
            
        <div class="col-8">
            <div class="text-center text-white"><h2><b><u>Aktuální seznam zaměstnanců</u></b></h2></div>
            <table class="table table-bordered table-striped table-dark">               
    <tr>
      <th scope="col">#</th>
      <th scope="col">Jméno</th>
      <th scope="col">Příjmení</th>
      <th scope="col">Osobní číslo</th>
    </tr>
    <?php foreach ($zamestnanci as $zam) { ?>
        <tr>
            <td><?= $zam->id; ?></td>
            <td><?= $zam->jmeno; ?></td>
            <td><?= $zam->prijmeni; ?></td>
            <td><?= $zam->osobni_cislo; ?></td>
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
        <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Úprava dat o zaměstnancích v databázi </h4>
        
        <form action="" method="POST">
            <input type="text" name="id" placeholder="Zadejte platné ID"/><br/>
            <input type="text" name="jmeno" placeholder="Zadejte nové/aktuální jméno"/><br/>
            <input type="text" name="prijmeni" placeholder="Zadejte nové/aktuální příjmení"/><br/>
            <input type="text" name="osobni_cislo" placeholder="Zadejte nové/aktuální osobní číslo"/><br/>
            
            <input type="submit" name="update" value="Upravit data" onClick="window.location.reload()">
        </form>
    </center>
      <div><br>&nbsp</div>
      <div><br>&nbsp</div>
      <div><br>&nbsp</div>
        </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Smazání dat z databáze zadaním platného ID </h4>
        <form action="" method="post">

            &nbsp;<input type="text" name="id" placeholder="Zadejte ID řádku pro jeho smazání" required><br><br>

            <input type="submit" name="delete" value="Smazat data" onClick="window.location.reload()">

        </form>
    </center>
            </div>
                </div>
                <div><br>&nbsp</div>
                 <img src="<?php echo base_url ('images/zam.jpeg'); ?>" class="rounded" width="350" height="225" alt="Zaměstnanec">     
            </div>
            <div class="col-4">
                <div class="card">
  <div class="card-body">
    <center>
        <h4> Přidání nového zaměstnance do databáze </h4>
        <form action="" method="POST">
            <input type="text" name="jmeno" placeholder="Zadejte jméno nového zaměstnance"/><br/>
            <input type="text" name="prijmeni" placeholder="Zadejte příjmení nového zaměstnance"/><br/>
            <input type="text" name="osobni_cislo" placeholder="Zadejte os.č. nového zaměstnance"/><br/>
            
            <input type="submit" name="insert" value="Přidat data" onClick="window.location.reload()">
        </form>
    </center>
       <div><br>&nbsp</div>
       <div><br>&nbsp</div>
       <div><br>&nbsp</div>
       <div><br>&nbsp</div>
            </div>
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
    
    $query = "UPDATE `zamestnanci` SET jmeno='$_POST[jmeno]',prijmeni='$_POST[prijmeni]',osobni_cislo='$_POST[osobni_cislo]' where id='$_POST[id]' ";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data upravena") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data se nepodařilo upravit") </script>';
    }
    mysqli_close($connection);
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
    $query = "DELETE FROM zamestnanci WHERE id = $id";
    
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
        
        $jmeno = $_POST['jmeno'];
        $prijmeni = $_POST['prijmeni'];
        $osobni_cislo = $_POST['osobni_cislo'];
        
    if(!empty($jmeno) && !empty($prijmeni) && !empty($osobni_cislo) )   {
    
        
        $sql = "INSERT INTO `zamestnanci`(`jmeno`, `prijmeni`, `osobni_cislo`)"
                               . " VALUES ('$jmeno','$prijmeni','$osobni_cislo')" ;
    $qry = mysqli_query($connect, $sql);
    if($qry){
        echo '<script type="text/javascript"> alert("Zákazník byl úspěšně přidán do databáze") </script>';
    }   
        
    } else {
        echo '<script type="text/javascript"> alert("Všechny kolonky musí být vyplněné") </script>';
    }
    mysqli_close($connect);
    }
?>
