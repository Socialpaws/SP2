function mostrarInputFileModificado(numeroInput) {
    $("#archivo_oculto"+numeroInput).change(function(){
        $("#archivo"+numeroInput).val($("#archivo_oculto"+numeroInput).val());
    });
}