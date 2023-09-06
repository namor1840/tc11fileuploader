<!DOCTYPE html>
<html>
<head>
    <title>Carga de Archivos</title>
</head>
<body>
    <h1>Subir Archivos</h1>
    <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Cargar Archivo</button>
    </form>
</body>
</html>
