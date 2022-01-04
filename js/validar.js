
//Validar el select a travez del id 
$(document).ready(function(){

});

function recargarCiudadesO(){
    $.ajax({
        type: "POST",
        url: "../consultas.php",
        data:"ciudadOrigen"

    })
}


/*(function(){
    var selectPaisOrigen = document.getElementById("paisesOrigen");
    var selectCiudadOrigen = document.getElementById("ciudadOrigen");

    selectPaisOrigen.addEventListener("change", function(){
        if(selectPaisOrigen != ""){
            selectCiudadOrigen.disabled = false;
            selectCiudadOrigen.required = true;
        }
    });
})();*/
