$(document).ready(function () {
    //Menu de navegacion
    $('.dropdown-button').dropdown();
    $('.button-collapse').sideNav();

    //Parametrizacion del modal
    $('.modal-trigger').leanModal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        in_duration: 300, // Transition in duration
        out_duration: 200, // Transition out duration
        ready: function () {

        }, // Callback for Modal open
        complete: function () {
            limpiar();
        } // Callback for Modal close
    }
    );
});


function validarLoguin(f1, tipo) {

    f1.type.value = tipo;

    if (tipo == "con") {
        if (f1.usuario.value != "" && f1.password.value != "") {
            f1.submit();
        } else {
            Materialize.toast('Ingrese todos los datos', 4000);            
        }
    }

    if (tipo == "desc") {
        f1.submit();
    }


}


