<!DOCTYPE html>
<html lang="ept-BR">
<head>
  <meta charset="UTF-8">
  <title>Upload</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<?

$erro = $config = array();

// Busca arquivo e prepara para upload
$arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;

{
// ler extensão de arquivo
preg_match("/\.(gif|bmp|png|jpg|jpeg|exe|zip|txt|mp3|mpg|wav|wma|doc|xls|ppt|html|tif){1}$/i", $arquivo["name"], $ext);

// Renomear arquivo para evitar quebras
$file_nome = md5(uniqid(time())) . "." . $ext[1];

// upload e registro de pasta
$file_dir = "/home/u300339450/public_html/upload/arquivos/" . $file_nome;

// Upload e alocação de arquivo
move_uploaded_file($arquivo["tmp_name"], $file_dir);

// Mensagem de envio de arquivo
echo 'Seu arquivo foi enviada com sucesso!<br><br><a class="btn btn-default" href="index.php">Enviar Mais</a>';
}
?>

</body>
</html>