<?php $estudantes = $_REQUEST['estudantes']; ?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Professores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>
  <div class="container">
    <div class="row text-center">
      <h1>Semana da Acessibilidade</h1>
    </div>

    <div class="text-center">
      <img class="rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuCEzJO9fKlsbnAeB0tCOZKHQGcsDrSuoqinN3875_hIc9NxG1c5LI2pNaH9c66rTpNzI&usqp=CAU" alt="Representa uma tecla que informa aos deficientes visuais a descrição do que está na tela.">
    </div>
    <br>
    <a href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=salvar" class="btn btn-success">Cadastrar Estudante</a>
    <br>
    <br>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Idade</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($estudantes as $estudanteAtual) { ?>
          <tr>
            <td>
              <?php echo $estudanteAtual['id']; ?>
            </td>
            <td>
              <?php echo $estudanteAtual['nome']; ?>
            </td>
            <td>
              <?php echo $estudanteAtual['idade']; ?>
            </td>
            <td>
            <a href="/<?php echo FOLDER; ?>?controller=Estudante&acao=editar&id=<?php echo $estudanteAtual['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="/<?php echo FOLDER; ?>?controller=Estudante&acao=excluir&id=<?php echo $estudanteAtual['id']; ?>" class="btn btn-primary">Excluir</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>