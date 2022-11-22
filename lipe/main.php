<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    $nome = isset($_POST["fname"])?$_POST["fname"]: "Nome de Usuário";
    $email = isset($_POST["femail"])?$_POST["femail"]: "Email do Usuário";
    $telefone = isset($_POST["ftelefone"])?$_POST["ftelefone"]: "Telefone do Usuário";
    $sex = isset($_POST["sexo"])?$_POST["sexo"]: "Sexo do Usuário";
    $date = isset($_POST["fdate"])?$_POST["fdate"]: "Data_Nascimento";
    //$cidade = isset($_POST["fcidade"])?$_POST["fcidade"]: "Cidade";
    // $estado = isset($_POST["festado"])?$_POST["festado"]: "Estado";
    $endereço = isset($_POST["fendereço"])?$_POST["fendereço"]: "Endereço";

    $estado = isset($_POST["estados"])?$_POST["estados"]: "Estado";


    list($ano, $mes, $dia) = explode('-', $date);
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    ?>

    <link rel="stylesheet" href="result.css">
    <title>Formulário Preenchido</title>
</head>
<body>
    <main class="view">
        <section>
            <h1>Aqui está Sua Ficha de Cadastro</h1>
            <h2>Nome Completo: </h2> <p><?php echo $nome;?></p>
            <h2>Email: </h2> <p><?php echo $email;?> </p>
            <h2>Telefone: </h2> <p><?php echo $telefone;?></p>
            <h2>Sexo: </h2> <p><?php echo $sex;?></p>
            <h2>Idade: </h2> <p><?php  echo "$idade Anos";?></p>
            <h2>Endereço:</h2> <p><?php echo $endereço;?> </p>

            <h2>Estado: <?php echo $estado; ?></h2>
        </section>
    </main>
</body>
</html>




