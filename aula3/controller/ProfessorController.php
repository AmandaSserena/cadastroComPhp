<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/model/ProfessorModel.php';

class ProfessorController
{
    const CONTROLLER_FOLDER = '/professor';
    public function listar()
    {
        $professorModel = new ProfessorModel();
        $professores = $professorModel->listarModel();
        $_REQUEST['professores'] = $professores;

        //render na view
        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/ProfessorView.php';
    }

    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/ProfessorForm.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            $professorModel = new ProfessorModel();
            $professorModel->salvarModel($nome, $idade);
            header('Location: http://localhost/'.FOLDER. '/?controller=Professor&acao=listar');
            exit();
        } 
    }

    public function editar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET["id"];
            $professorModel = new ProfessorModel();
            $professor = $professorModel->buscarPeloId($id);

            $_REQUEST['professor'] = $professor;

            require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/ProfessorFormEdit.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_GET['id'];
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            $professorModel = new ProfessorModel();
            $professorModel->atualizarModel($id, $nome, $idade);
            header('Location: http://localhost/' . FOLDER . '/?controller=Professor&acao=listar');
            exit();
        }
    }

    public function excluir()
    {
        $id = $_GET["id"];

        $professorModel = new ProfessorModel();

        $professorModel->excluirModel($id);

        header('Location: http://localhost/' . FOLDER . '/?controller=Professor&acao=listar');
        exit();
    }
}
