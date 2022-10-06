<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- JQUERY -->
    <script src="scripts/jquery.min.js"></script>
    <!-- PLUGIN MASCARA JQUERY -->
    <script src="scripts/jquery.mask.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SCRIPT -->
    <script src="scripts/mascara.js"></script>
    <script src="scripts/script.js"></script>

</head>

<body>
    <div>
        <?php
            //COMANDO PARA VERIFICAR SE A CONEXAO COM O BANCO FOI COM SUCESSO OU NAO
            include "banco.php";
            if (!$conn) {
                echo "Não foi possível conectar ao banco MySQL.";
            }
            else {
                echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.";
            }
        ?>
    </div>

    <div class="col offset-5">
        <img id="logo" src="img/FAESA.png">
    </div>
    <br>
    <?php 
        //VERIFICA SE TEM MENSAGEM, CASO TENHA, ELE APARECE UM ALERTA
        if(isset($_GET['mensagem'])){
            $msg = $_GET['mensagem'];
            
            if ($msg == 202){
                echo "<script>alert('Mensagem salva com sucesso!');</script>";
            }
        }
    ?>
    <div class="row">
        <div class="col col-3 offset-5">

            <form action="cadastro.php" method="post" name="formulario" onsubmit="return ValidacaoFormulario()">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" placeholder="Seu nome" name="nome"
                        onblur="ValidacaoNome(this.value)" autocomplete="off" required>
                    <small id='alerta-nome' class="alerta">Digite o nome corretamente. Ex: Fulano</small>
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control alertainp" name="email" autocomplete="off" placeholder="nome@exemplo.com"
                        onblur="ValidacaoEmail(this.value)" required>
                    <small id='alerta-email' class="alerta">Digite o email corretamente Ex: nome@exemplo.com .</small>

                    <div class="form-group">
                        <label for="numero">Numero</label>
                        <input type="text" name="numero" class="form-control telefone" autocomplete="off"
                            placeholder="Digite o numero dotelefone" minlength="14" maxlength="15"
                            onblur="ValidacaoTelefone(this.value)" required>
                        <small id='alerta-tel' class="alerta">Digite o numero corretamente. Ex: (27) 9999-9999 / (27)
                            99999-9999</small>
                    </div>
                    <div class="form-group">
                        <label>Mensagem:</label>
                        <input type="text" name="mensagem" class="form-control" autocomplete="off"
                            placeholder="Digite sua Mensagem (min 10 caracteres)" onblur="ValidacaoMensagem(this.value)" minlength="10" rows=4 required>
                        <small id='alerta-msg' class="alerta">A mensagem deverá possuir o minimo de 10 caracteres sem contar com os espaços</small>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary">Limpar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>

            </form>
        </div>

    </div>

</body>
</html>