<?php
//error_reporting(0);
//ini_set("display_errors", 0);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="Recursos/js/gestionEstudiante.js"></script>        
    </head>      
    <body>       

        <br>

        <!--        print-->
        <form name="formPDF" method="post" action="Controlador/gestionEstudiante.php" target="_blank">
            <a class="l3 btn-floating btn modal-trigger" id="btnOpen" href="#nuevoEstudiante"><i class="material-icons">add</i></a>
            <a class="l3 btn-floating btn" id="btnPdf" onclick="formPDF.submit();"><i class="material-icons">print</i></a>            
        </form>



        <br>

        <!-- Modal Structure -->
        <div id="nuevoEstudiante" class="modal">
            <div class="modal-content">
                <!-- CENTRAR LOS ELEMENTOS DEL FORMULARIO -->
                <div class="container">
                    <form id="FormContainer" class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="txtId" name="id" type="text" class="validate" value="" style="display: none">                    
                            </div>
                        </div>

                        <div class="row">
                            <div class="progress" style="display: none">
                                <div class="indeterminate"></div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col l12 s12">
                                <input id="txtCodigo" name="codigo" type="number" class="validate col l10 s10" value="">
                                <label class="active" for="codigo" data-error="Ingrese un numero valido">Ingrese su codigo</label>

                                <a class="col l2 s2" style="cursor: pointer" id="btnBuscar" onclick="buscarEstudiante();"><i class="material-icons">search</i></a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="txtNombre" name="nombre" type="text" class="validate" value="">
                                <label class="active" for="nombre">Ingrese su nombre</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="txtApellido" name="apellido" type="text" class="validate" value="">
                                <label for="apellido">Ingrese su apellido</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="txtCedula" name="cedula" type="number" class="validate" value="">
                                <label for="cedula" data-error="Ingrese un numero valido" >Ingrese su cedula</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="txtEdad" name="edad" type="number" class="validate" value="">
                                <label for="edad" data-error="Ingrese un numero valido" >Ingrese su edad</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="txtSemestre" name="semestre" type="number" class="validate" value="">
                                <label for="semestre" data-error="Ingrese un numero valido">Ingrese su semestre</label>
                            </div>
                        </div>     


                        <div class="row">
                            <div class="progress" style="display: none">
                                <div class="indeterminate"></div>
                            </div>

                        </div>

                        <div class="row center-btn">
                            <div class="col l12 s12">
                                <a class="l4 btn-floating btn-large" id="btnGuardar" onclick="guardarEstudiante();"><i class="material-icons">save</i></a>                                
                                <a class="l4 btn-floating  btn-large" id="btnModificar" onclick="guardarEstudiante();"><i class="material-icons">edit</i></a>
                                <a class="l4 btn-floating  btn-large" id="btnEliminar" onclick="eliminarEstudiante();"><i class="material-icons">delete</i></a>                 
                            </div>
                        </div>
                    </form>
                </div>               
            </div>
        </div>



        <table  class="centered responsive-table striped" id="listadoEstudiantes">                        
        </table>

    </body>
</html>
