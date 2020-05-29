// Control de generación para el QR. Al enviar se hace la llamada por Ajax, recogiendo los datos
// para entregarlos en generate_code.php y mostrar la respuesta
$(document).ready(function() {
    $("#codeForm").submit(function(){
        $.ajax({
            url:'generate_code.php',
            type:'POST',
            data: {formData:$("#content").val(), ecc:$("#ecc").val(), size:$("#size").val()},
            success: function(response) {
                $(".showQRCode").html(response);  
            },
            });
    });
});


//Función preparada para envio de archivos
    // $(document).ready(function() {
    //     $("#fileForm").submit(function(){
    //         $.ajax({
    //             url:'generate_code.php',
    //             type:'POST',
    //             data: {formData:$("#file").val(), ecc:$("#ecc").val(), size:$("#size").val()},
    //             success: function(response) {
    //                 $(".showQRCode").html(response);  
    //             },
    //          });
    //     });
    // });

//Si la respuesta es satisfactoria, se imprime en el div showQRCode