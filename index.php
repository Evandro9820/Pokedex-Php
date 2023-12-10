<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
        }

        .btn-primary {
            background-color: green !important;
        }

        .bg-light {
            background-color: aliceblue !important;
        }

        button:hover {
            opacity: .8;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center bg-light fs-5">
    <main class="bg-white rounded-4 p-4">



        <form action="processar_cadastro.php" method="POST" class="d-flex flex-column gap-4">
            <header class="h1">Cadastro</header>

            <input type="text" id="nome" name="nome" class="rounded-4 p-3 border-0 bg-light" placeholder="🙎Nome" required>

            <input type="email" id="email" name="email" class="rounded-4 p-3 border-0 bg-light" placeholder="✉️ Email" required>

            <input type="password" id="senha" name="senha" class="rounded-4 p-3 border-0 bg-light" placeholder="🔒 Senha" required>

            <button class="btn btn-primary rounded-4 p-3 border-0 text-white" type="submit" name="cadastrar">Cadastrar</button>

            <div class="f-5">
                <p class="">Já possui uma conta?</p>
                <a href="login.php" class="text-primary text-decoration-none">Entrar</a>
            </div>
        </form>
    </main>

</body>

</html>