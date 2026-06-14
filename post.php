<?php
$enviado = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($enviado) {
    $nome  = htmlspecialchars($_POST['nome']);
    $idade = htmlspecialchars($_POST['idade']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Método POST</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center pt-12 pb-12">
    <div class="bg-white p-8 rounded shadow w-[500px] space-y-6">

        <h1 class="text-2xl font-bold">Método POST</h1>

        <div class="border rounded p-4 bg-yellow-50">
            <h2 class="font-bold mb-2"> Como funciona o POST</h2>
            <p class="text-sm">
                Ao enviar este formulário os dados não são colocados na URL Eles vão no corpo da requisição HTTP e são
                lidos pelo PHP através do array $_POST Por isso a URL continua limpa, sem QueryString.
            </p>
        </div>

        <form action="post.php" method="post">
            <label class="block font-bold mt-1">Nome:</label>
            <input type="text" name="nome" required class="w-full border rounded p-2 mt-1">

            <label class="block font-bold mt-3">Idade:</label>
            <input type="number" name="idade" required class="w-full border rounded p-2 mt-1">

            <input type="submit" value="Enviar" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded cursor-pointer">
        </form>

        <?php if ($enviado): ?>

            <div class="border rounded p-4">
                <h2 class="font-bold mb-2"> Dados recebidos($_POST)</h2>
                <p>nome: <strong><?= $nome ?></strong></p>
                <p>idade: <strong><?= $idade ?></strong></p>
            </div>

            <div class="border rounded p-4 bg-gray-50">
                <h2 class="font-bold mb-2"> URL gerada pelo navegador</h2>
                <pre class="text-xs bg-gray-900 text-green-400 p-2 rounded overflow-x-auto">/post.php</pre>
                <p class="text-sm mt-2">
                    A URL não muda. Os valores nome=<?= $nome ?> e >idade=<?= $idade ?> foram enviados escondidos, e o PHP pega eles em $_POST
                </p>
            </div>

            <div class="bg-green-100 border border-green-400 text-green-700 p-3 rounded text-sm">
                 Os dados ficaram no corpo da requisição, não aparecem na URL,
                no histórico do navegador nem em prints da tela. Olhe a barra de
                endereços: ela continua igual!
            </div>

        <?php endif; ?>

        <a href="index.php" class="block text-green-600 mt-2">Voltar</a>
    </div>
</body>
</html>