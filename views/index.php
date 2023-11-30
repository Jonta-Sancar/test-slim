<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Info-Cadastro</title>

  <link rel="stylesheet" href="views/style.css">
</head>
<body>
  <span><strong>Nome: </strong><?= $nome ?? '' ?></span>
  <span><strong>E-mail: </strong><?= $email ?? '' ?></span>
  <span><strong>Senha: </strong><?= $senha ?? '' ?></span>
</body>
</html>