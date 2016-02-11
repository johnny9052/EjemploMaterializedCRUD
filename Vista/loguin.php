<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>                        

    </head>
    <body>

        <!-- CENTRAR LOS ELEMENTOS DEL FORMULARIO -->
        <div class="container">
            <form class="col s12" name="formularioLoguin" method="post" action="Controlador/gestionLoguin.php" autocomplete="off">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="txtUsuario" name="usuario" type="text" class="validate" value="">
                        <label for="usuario">Ingrese su usuario</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="txtPassword" name="password" type="password" class="validate" value="">
                        <label for="password">Ingrese su password</label>
                    </div>
                </div>
                <div class="row center-btn">
                    <div class="col s12">
                        <a class="waves-effect waves-light btn" id="btnLoguin" onclick="validarLoguin(formularioLoguin, 'con')"><i class="material-icons left">verified_user</i>Ingresar</a>                
                    </div>
                </div>

                <input type="text" name="type" style="display: none">

            </form>

        </div>
    </body>
</html>
