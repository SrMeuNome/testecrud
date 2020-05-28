<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <script src="js/jquery.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/controle.js"></script>
        <title>CRUD-Vinicius</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <form action="processo.php" method="POST" class="col-12">
                    <fieldset>
                        <legend>Cadastrar Veículos</legend>
                        <div class="form-group">
                            <div class="form-inline">
                                <span class="col-1"></span>
                                <label for="marca" class="col-1 col-form-label">Marca:</label>
                                <input id="marca" name="marca" class="form-control col-3" type="text" placeholder="ex: Ford" />
                                <span class="col-1"></span>
                                <label for="modelo" class="col-1 col-form-label">Modelo:</label>
                                <input id="modelo" name="modelo" class="form-control col-3" type="text" placeholder="ex: Focus" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-inline">
                                <label for="placa" class="col-1 col-form-label">Placa:</label>
                                <input id="placa" name="placa" class="form-control col-2" type="text" placeholder="ex: BRA 3R52"/>
                                <label for="ano" class="col-1 col-form-label">Ano:</label>
                                <input id="ano" name="ano" class="form-control col-2" type="text" placeholder="ex: 2001"/>
                                <label for="cor" class="col-1 col-form-label">Cor:</label>
                                <input id="cor" name="cor" class="form-control col-4" type="text" placeholder="ex: Vermelho"/>
                            </div>
                        </div>
                        
                        <div class="form-group botoes">
                            <button type="submit" class="btn btn-primary" id="salvar" name="salvar">Salvar</button>
                            <button type="reset" class="btn btn-secondary">Limpar</button>
                        </div>
                    </fieldset>
                </form>

                <span class="espaco col-12"></span>

                <table class="table table-striped table-bordered col-12">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Cor</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $conexao = new mysqli('localhost','root','','red_vinicius');
                            
                            $tabela = $conexao->query('SELECT * FROM carro');

                            while($linha = $tabela->fetch_assoc())
                            {
                        ?>
                            <tr>
                                <td><?=$linha['marca']?></td>
                                <td><?=$linha['modelo']?></td>
                                <td><?=$linha['cor']?></td>
                            </tr>
                        <?php
                            }
                            mysqli_close($conexao)
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>