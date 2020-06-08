<?php 
//Para tratar archivos si queremos modificar la recepción de datos
//$codFiles = "files/";//Carpeta de destino
//opendir($codFiles);//Abrir directorio
//$ruta = $codFiles.$_FILES['file']['name'];//carpeta con nombre asignado al archivo
//copy($_FILES['file']['tmp_name'], $ruta);
// echo "archivo guardado";//Pruebas
// $nombre_archivo = $_FILES['file']['name'];//Pruebas
// echo "<img src=\"files/$nombre_archivo\">";//pruebas
// echo "<script>alert('Archivo guardado');window.location='index.php'</script>";//Mostrar alert y redireccionar
// die();

//Para el envío de la url
if(isset($_POST) && !empty($_POST)) {
    //Si se reciben datos, se llama a la libreria
    include('library/phpqrcode/qrlib.php'); 
    // $codesDir = "codes/"; //Carpeta de destino de las imágenes creadas  
    $codeFile = date('d-m-Y-h-i-s').'.png';//se almacenan por fecha, asegurando sean únicos
    //El método png crea el QR
    // QRcode::png($_POST['formData'], $codesDir.$codeFile, $_POST['ecc'], $_POST['size']); 
    // QRcode::png($_POST['formData'], $codeFile, $_POST['ecc'], $_POST['size']); 
    // echo '<img class="img-thumbnail" src="'.$codeFile.'" />';
    echo '<h1>Imagen'.$codeFile.'</h1>';
} else {
    header('location:./');
}
?>