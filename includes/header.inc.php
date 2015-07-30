<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Bienvenu à notre site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">


    </style>
    <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">
    function redirectMe(id){
        if (confirm("Voulez-vous supprimer l'Adhérent avec ID°"+id)){
            window.location = 'adherent.php?action=supprimer&id='+id;
        }
    }
    </script>
</head>

<body> 
    <div class="container" style ="width:90%; float:auto;">
    <div class="row ">
    <span class="span-7" style="float:right;"><?php echo date("Y-m-d h:i:s") ?></span>
    <br/>
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav">
                <li class="active"><a href="index.php">Accueil</a></li>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="adherents.php">Adhérents</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

        </div>
    </div>
   
    </div>
