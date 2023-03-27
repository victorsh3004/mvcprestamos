const formularios_ajax = document.querySelectorAll(".FormularioAjax");

function enviar_formulario_ajax(e){
	e.preventDefault();
}

formularios_ajax.forEach(formularios => {
	formularios.addEventListener("submit", enviar_formulario_ajax);

});


//UUID=723883f5-2099-42e9-807c-bc212bd77d04      /home   ext4   rw   0   2
