<?php $estudantes = $_REQUEST['estudantes']; ?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <h1>Semana da Acessibilidade</h1>
        </div>

        <div class="text-center">
            <img class="rounded" src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fcta.ifrs.edu.br%2Fwp-content%2Fuploads%2Fsites%2F3%2F2018%2F12%2F18_BoasPrativasDescricaoImagens.jpg&tbnid=xFScih_a4RSnEM&vet=10CB0QMyjeAWoXChMI0Iy1mLGAgQMVAAAAAB0AAAAAEAM..i&imgrefurl=https%3A%2F%2Fcta.ifrs.edu.br%2Fboas-praticas-para-descricao-de-imagens%2F&docid=rIUBo4nqfx1a0M&w=380&h=285&q=%20acessibilidade%20%20imagem%20pessoa&ved=0CB0QMyjeAWoXChMI0Iy1mLGAgQMVAAAAAB0AAAAAEAM.jpg" alt="Representa uma tecla que informa aos deficientes visuais a descrição do que está na tela.">
        </div>
        <br>
        <br>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudantes as $estudanteAtual) { ?>
                    <tr>
                        <td>Nome :</td>
                        <td><?php echo $estudanteAtual['id']; ?></td>
                        <td><?php echo $estudanteAtual['nome']; ?></td>
                        <td><?php echo $estudanteAtual['idade']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>