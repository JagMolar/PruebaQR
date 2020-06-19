<?php 

//Para el envío de la url
if(isset($_POST) && !empty($_POST)) {
    //Si se reciben datos, se llama a la libreria
    include('library/phpqrcode/qrlib.php'); 
    $codesDir = "codes/"; //Carpeta de destino de las imágenes creadas  
    $codeFile = date('d-m-Y-h-i-s').'.png';//se almacenan por fecha, asegurando sean únicos
    //El método png crea el QR
    QRcode::png($_POST['formData'], $codesDir.$codeFile, $_POST['ecc'], $_POST['size']); 
    echo '<div class="qr"><h3 class="cover-heading">Este es tú código</h3><br/><img class="img-thumbnail" src="'.$codesDir.$codeFile.'" /></div>';
} else {
    header('location:./');
}
?>