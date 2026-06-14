<?php
$enviado = isset($_GET['nome']);

if ($enviado) {
    $nome  = htmlspecialchars($_GET['nome']);
    $idade = htmlspecialchars($_GET['idade']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Método GET</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center pt-12 pb-12">
    <div class="bg-white p-8 rounded shadow w-[500px] space-y-6">

        <h1 class="text-2xl font-bold">Método GET</h1>

        <div class="border rounded p-4 bg-yellow-50">
            <h2 class="font-bold mb-2"> Como funciona o GET</h2>
            <p class="text-sm">
                Ao enviar este formulário o navegador monta uma URL adicionando ? seguido dos campos no formato chave=valor,
                unidos por & essa parte é a QueryString lida pelo PHP através do array <strong>$_GET</strong>
            </p>
        </div>

        <form action="get.php" method="get">
            <label class="block font-bold mt-1">Nome:</label>
            <input type="text" name="nome" required class="w-full border rounded p-2 mt-1">

            <label class="block font-bold mt-3">Idade:</label>
            <input type="number" name="idade" required class="w-full border rounded p-2 mt-1">

            <input type="submit" value="Enviar" class="mt-4 bg-green-600 text-white px-4 py-2 rounded cursor-pointer">
        </form>

        <?php if ($enviado): ?>

            <div class="border rounded p-4">
                <h2 class="font-bold mb-2"> Dados recebidos ($_GET)</h2>
                <p>nome: <strong><?= $nome ?></strong></p>
                <p>idade: <strong><?= $idade ?></strong></p>
            </div>

            <div class="border rounded p-4 bg-gray-50">
                <h2 class="font-bold mb-2"> URL gerada pelo navegador</h2>
                <pre class="text-xs bg-gray-900 text-green-400 p-2 rounded">/get.php?nome=<?= $nome ?>&idade=<?= $idade ?></pre>
                <p class="text-sm mt-2">
                    Tudo depois do ? é a QueryString e é dali que o PHP pega os valores em $_GET
                </p>
            </div>

            <div class="bg-red-100 border border-red-400 text-red-700 p-3 rounded text-sm">
                Como os dados estão na URL, eles ficam visíveis no histórico do navegador, em prints e em logs do servidor olhe a barra de
                endereços do navegador depois de enviar o formulário
            </div>

        <?php endif; ?>

        <a href="index.php" class="block text-green-600 mt-2">Voltar</a>
    </div>
</body>
</html>