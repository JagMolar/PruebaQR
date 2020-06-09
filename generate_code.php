<?php 
// require  ' autoload.php ' ; //Cargamos las ayudas para cloudinary
// require  ' Helpers.php ' ; // opcional para usar los métodos auxiliares cl_image_tag y cl_video_tag

//CLOUDINARY_URL=cloudinary://765615988784445:7fDja_bjq-Nikujy5DCo9pK7FvE@jagmolar

// \Cloudinary::config(array( 
//     "cloud_name" => "jagmolar", 
//     "api_key" => "765615988784445", 
//     "api_secret" => "7fDja_bjq-Nikujy5DCo9pK7FvE", 
//     "secure" => true
//   ));

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
    $codesDir = "codes/"; //Carpeta de destino de las imágenes creadas
    // $codesDir = \Cloudinary\Uploader::upload($qr); 
    $codeFile = date('d-m-Y-h-i-s').'.png';//se almacenan por fecha, asegurando sean únicos
    //El método png crea el QR
    var_dump($codesDir);
    var_dump($codeFile);
    QRcode::png($_POST['formData'], $codesDir.$codeFile, $_POST['ecc'], $_POST['size']); 
    echo ('<p>test3</p>');
    echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';
    echo ('<p>test4</p>');
} else {
    header('location:./');
}
?>