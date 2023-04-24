<?php
if (isset($_POST['submit'])) {
    // print_r('nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('telefone: ' . $_POST['telefone']);
    // print_r('<br>');
    //print_r('sexo: ' . $_POST['genero']);
    //print_r('<br>');
    // print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    //print_r('<br>');
    // print_r('Cidade: ' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado: ' . $_POST['estado']);
    // print_r('<br>');
    //print_r('Endereço: ' . $_POST['emdereco']);

    include_once('config.php');

    $nome = $_POST('nome');
    $email = $_POST('email');
    $telefone = $_POST('telefone');
    $sexo = $_POST('genero');
    $cidade = $_POST('cidade');
    $estado = $_POST('estado');
    $endereco = $_POST('endereco');

    $result = mysqli_query($conexao, "INSRET INTO usuarios(nome,email.telefone,sexo,data_nasc,cidade,estado,endereco)
      VALUES($nome, $email, $telefone,$sexp,$data_nasc,$cidade,$estadddo,$endereco)");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formuláriocadastro</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(0, 162, 255), rgb(11, 34, 138), rgb(0, 247, 255));
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-radius: 15px;

        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            background-color: dodgerblue;

        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(0, rgb(0, 183, 255)8), rgb(0, 81, 255), green);
            width: 100%;
            border: none;
            padding: 15px;
            border-radius: 8px;
            color: black;
            font-size: 20px;
            cursor: pointer;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(39, 41, 165), rgb(16, 153, 163), rgb(7, 77, 170));
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>

                </div>
                <br>
                <p>sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>

                <label for="data_nascimento"><b>Data de Nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>

                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="enbdereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>
    </div>

</body>

</html>