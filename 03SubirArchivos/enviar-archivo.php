<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos al servidor con PHP</title>
</head>
<body>
    <form action="subir-archivo.php" name="enviar_archivo_frm" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo_fls">
        <input type="submit" value="Subir Archivo" name="subit_btn">

    </form>
</body>
</html>