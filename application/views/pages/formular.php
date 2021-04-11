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
        background-image: url(<?php echo base_url();?>images/omg.jpg);
        background-repeat:no-repeat;
        background-size:cover;
} 
.card {
         background-image: url(<?php echo base_url();?>images/form-back.jpg);
         border: 4px;
         border-style: solid;
         border-color: white;
}
.jumbotron {
        background-image: url(<?php echo base_url();?>images/jumb-pokus.jpg);
         border: 1px;
         border-style: solid;
         border-color: white;
}
        </style>
    </head>
    <body style="background-color:lightyellow;">
        <div class="container">
            <div><br>&nbsp</div>
            <div><br>&nbsp</div>
            <div class="row">
                <div class="col-3">
                    
                </div>
                
                <div class="col-6">
                    <div class="card">
                    <div class="card-body">
                        <div class="text-center" style="color:white">
                            <h2><b><u>Formuláře</u></b></h2>
                        </div>
                    <div><br>&nbsp</div>
                    <button type="button" class="btn btn-dark btn-block">
                    <a class="nav-link text-light" href="zamestnanci">Správa zaměstnanců</a>
                    </button>
                    <button type="button" class="btn btn-dark btn-block">
                    <a class="nav-link text-light" href="zakaznici">Správa a přidání zákazníků</a>
                    </button>
                    <button type="button" class="btn btn-dark btn-block">
                    <a class="nav-link text-light" href="opravy">Informace a správa oprav a vozidel a náhradních dílů</a>
                    </button>
                    </div>
                </div>
                </div>
                <div class="col-3">
                    
                </div>
            </div>
            <div><br>&nbsp</div>
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