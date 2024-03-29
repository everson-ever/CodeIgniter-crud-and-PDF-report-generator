<?php 
    $this->load->view('template/head');
    $this->load->view('template/header');

?>

<h1 class="titulo-empresas">Colaboradores</h1>

<?php 
    $this->load->view('components/alerts');
?>


<div class="container">
    <a href="<?= base_url('index.php/colaboradores/cadastro') ?>" class="btn btn-cadastro">Novo Colaborador</a>
    <a href="<?= base_url('index.php/colaboradores/relatorio') ?>" class="btn btn-relatorio">Gerar Relatório</a>
</div>

<div class="wrap">
    <table class="empresas container">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>CPF</th>  
                <th>Sexo</th>
                <th>Ações</th> 
            </tr>
        </thead>

        <tbody>

            <?php foreach($colaboradores as $colaborador): ?>
                <tr>
                    <td><a href="<?= base_url('index.php/colaboradores/') ?><?= $colaborador->id_colaborador ?>"><?= $colaborador->nome ?></a></td>
                    <td><?= $colaborador->email ?></td>
                    <td><?= $colaborador->cpf ?></td>
                    <td><?= $colaborador->sexo == "M" ? "Masculino" : "Feminino" ?></td>
                    <td>
                        <a href="<?= base_url('index.php/colaboradores/atualizar/') ?><?= $colaborador->id_colaborador ?>" class="btn btn-alterar">Alterar</a>
                        <a href="<?= base_url('index.php/colaboradores/excluir/') ?><?= $colaborador->id_colaborador ?>" class="btn btn-excluir">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>  
        </tbody>
    </table>
</div>

<div class="container page">
    <div class="pagination">
        <?= $this->pagination->create_links(); ?>
    </div>
</div>

<style>

    .titulo-empresas {
        text-align: center;
        font-size: 3em;
        color: #aaa;
        margin: 40px 0;
    }

    .wrap {
        overflow: auto;
        max-width: 100%;
        margin-bottom: 120px;
    }

    .empresas {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        min-width: 1000px;
        width: 100%;
        
    }

    .empresas  tr:nth-child(even){background-color: #f2f2f2;}

    .empresas  tr:hover {background-color: #ddd;}

    .empresas  th {
        padding: 15px 0 15px 15px;
        text-align: left;
        background-color: #eee;
        font-size: 1.3em;
        font-weight: 300;
        overflow: auto;
    }

    .empresas td {
        padding: 15px 0 15px 15px;
        overflow: auto;
    }

    .btn {
        width: 120px;
        padding: 10px;
        border-radius: 5px;
        color: #fff;
    }

    .btn-alterar {
        background-color: #2778f9;
    }

    .btn-excluir {
        background-color: #e82727;
    }

    .btn-cadastro {
        background-color: #46b716;
        display: inline-block;
        width: 180px !important;
        margin-bottom: 20px;
 
    }

    .btn-relatorio {
        background-color: #46b716;
        display: inline-block;
        width: 160px !important;
        margin-bottom: 20px;
    }

    .pagination a, strong {
        padding: 10px;
        
        
    }
    .page {
        margin-bottom: 20px;
    }

    @media only screen and (max-width: 700px) {

        .titulo-empresas {
            font-size: 2em;
        }

        .btn-cadastro, .btn-relatorio {
        display: block;
        margin: 0 auto 5px auto;
        width: calc(100% - 20px) !important;
        text-align: center;
        }
    }

    @media only screen and (min-width: 701px) and (max-width: 980px) {
        .btn-cadastro, .btn-relatorio {
            display: block;
            margin: 0 auto 5px auto;
            width: calc(50%) !important;
            text-align: center;
        }
    }



</style>



<?php

    $this->load->view('template/footer');
?>