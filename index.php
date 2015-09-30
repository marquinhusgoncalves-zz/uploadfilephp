<!DOCTYPE html>
<html lang="ept-BR">
<head>
  <meta charset="UTF-8">
  <title>Upload</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="arquivo">Selecione o arquivo</label>
      <input name="arquivo" type="file" id="arquivo">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
</body>
</html>