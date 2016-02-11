<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="Recursos/js/send_request.js"></script>        
    </head>
    <body>


        <!-- Navbar goes here -->
        <nav class="blue">

            <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

            <!-- MENU MOVIL #1 -->
            <ul id="slide-out" class="side-nav">  
                <li><a href="index.php">Inicio</a></li>                
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header">Parametrizacion<i class="mdi-navigation-arrow-drop-down"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="index.php?page=estudiantes">Estudiantes</a></li>                                    
                                    <li><a href="index.php?page=estudiantes">Opcion #1</a></li>            
                                    <li><a href="index.php?page=estudiantes">Opcion #2</a></li>                                      
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <form name="formularioLogoutMov" method="post" action="Controlador/gestionLoguin.php">
                        <input type="text" name="type" style="display: none">
                        <!--<input type="button" value="Desconectar" id="btnDesconectar">-->                       
                        <li><a href="#" id="btnDesconectar" class="right" onclick="validarLoguin(formularioLogoutMov, 'desc')">Cerrar sesion<i class="small mdi-action-account-circle"></i></a></li>
                    </form>
                </li>
            </ul>

            <!-- MENU #2 PC -->
            <ul class="left hide-on-med-and-down">                
                <li><a href="index.php">Inicio</a></li>                
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Parametrizacion<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="index.php?page=estudiantes">Estudiantes</a></li>                    
                    <li><a href="index.php?page=estudiantes">Opcion #1</a></li>   
                    <li><a href="index.php?page=estudiantes">Opcion #2</a></li>                     
                </ul>                
            </ul>
            <ul class="right hide-on-med-and-down">   

                <form name="formularioLogout" method="post" action="Controlador/gestionLoguin.php">
                    <input type="text" name="type" style="display: none">
                    <!--<input type="button" value="Desconectar" id="btnDesconectar">-->                       
                    <li><a href="#" id="btnDesconectar" class="right" onclick="validarLoguin(formularioLogout, 'desc')">Cerrar sesion<i class="small mdi-action-account-circle"></i></a></li>
                </form>


            </ul>

        </nav>


        <!--Page Layout here -->
        <main>
            <div class="row">
                <div class="col s12">
                    <?php
                    if (isset($_GET['page'])) {
                        include($_GET['page'] . ".php");
                    } else {
                        include("inicio.php");
                    }
                    ?>
                </div>
            </div>
        </main>







        <footer class="page-footer center-row blue">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h5 class="white-text">EAM</h5>
                        <p class="grey-text text-lighten-4">Escuela de Administracion y Mercadotecnia del Quindio</p>
                    </div>                   
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text                    
                </div>
            </div>
        </footer>

    </body>
</html>
