
var mostrar = function(value){
  console.log(value.name);

  $.ajax({
                  url:   '/mostrar.php',
                  data: {
                      "tipo" : value.name
                  },
                  type:  'post',
                  success:  function (response) {
                          $("#contenido").html(response);
                  }
          });


}


var enviar = function(value){

  $.ajax({
                  url:   '/introduce.php',
                  data: {
                      "tipo" : value.name,
                      "mensaje" : $('#mensaje').val()

                  },
                  type:  'post',
                  success:  function (response) {
                    mostrar(value); //actualizamos contenido
                  }
          });


}
