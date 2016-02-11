<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <!--Prevenir autocompletado -->
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="-1">

        <title>CRUD MATERIALIZED</title>

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="Recursos/materialize/css/materialize.min.css"  media="screen,projection"/>

        <!-- Personal Styles -->
        <link href="Recursos/css/styles.css" rel="stylesheet">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="Recursos/jquery/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="Recursos/materialize/js/materialize.min.js"></script>

        <!-- ICONOS ONLINE-->
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <link href="Recursos/materialize/css/icons.css" rel="stylesheet">

        <script type="text/javascript" src="Recursos/js/gestionLoguin.js"></script>
    </head>
    <body>


        <?php
        session_start();

        if (isset($_SESSION["user"])) {
            include("Vista/masterPage.php");
        } else {
            include("Vista/loguin.php");
        }
        ?>


        <div class="row center-row">
            <div class="col s12 ">
                <label>
                    <?php
                    if (isset($_GET['msjloguin'])) {
                        echo $_GET['msjloguin'];
                    }
                    ?>
                </label>
            </div>
        </div>



    </body>
</html>
