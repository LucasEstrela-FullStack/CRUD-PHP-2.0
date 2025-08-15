<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
     <Header>

     </Header>

     <main class="container">

     <form class="form d-flex gap-3 mt-3" action="cadastrar.php" method="post">
        <input autocomplete="off" placeholder="Nome" class="form-control" type="text" name="Nome">
        <input autocomplete="off" placeholder="Sobrenome" class="form-control" type="text" name="sobrenome">
        <input autocomplete="off" class="form-control" type="date" name="dataNas">
        <input type="submit" value="Cadastrar" class="btn btn-sm btn-success">
     </form>

     </main>
     <footer></footer>
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>