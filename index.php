<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>URL, QueryString e Métodos HTTP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center pt-12 pb-12">
    <div class="bg-white p-8 rounded shadow w-[500px] space-y-6">

        <h1 class="text-2xl font-bold">URL, QueryString e Métodos HTTP</h1>

        <div class="border rounded p-4">
            <h2 class="font-bold mb-2"> Anatomia de uma URL</h2>
            <p class="font-mono text-sm break-all bg-gray-50 p-2 rounded">
                <span class="text-blue-600">https</span>://<span class="text-purple-600">meusite.com</span><span class="text-green-600">/get.php</span><span class="text-red-600">?nome=Antonio&idade=16</span>
            </p>
            <ul class="text-sm mt-3 space-y-1">
                <li><span class="text-blue-600 font-bold">https</span> → protocolo</li>
                <li><span class="text-purple-600 font-bold">meusite.com</span> → domínio (host)</li>
                <li><span class="text-green-600 font-bold">/get.php</span> → caminho (path) - arquivo acessado</li>
                <li><span class="text-red-600 font-bold">?nome=Antonio&idade=16</span> → QueryString</li>
            </ul>
        </div>

        <div class="border rounded p-4 bg-yellow-50">
            <h2 class="font-bold mb-2"> O que é a QueryString?</h2>
            <p class="text-sm">
                É a parte da URL depois do ?, formada por pares chave=valor separados por &
                e usada para enviar dados ao servidor pela própria URL exatamente o que o método GET faz.
            </p>
        </div>

        <div class="border rounded p-4 bg-blue-50">
            <h2 class="font-bold mb-2"> GET x POST</h2>
            <table class="text-sm w-full text-left">
                <tr class="border-b">
                    <th class="py-1">Método</th>
                    <th class="py-1">Onde os dados vão</th>
                    <th class="py-1">Aparecem na URL?</th>
                </tr>
                <tr class="border-b">
                    <td class="py-1">GET</td>
                    <td class="py-1">QueryString da URL</td>
                    <td class="py-1 text-red-600">Sim</td>
                </tr>
                <tr>
                    <td class="py-1">POST</td>
                    <td class="py-1">Corpo da requisição</td>
                    <td class="py-1 text-green-600">Não</td>
                </tr>
            </table>
        </div>

        <div class="flex flex-col gap-2">
            <a href="get.php" class="text-center bg-green-600 text-white py-2 rounded"> Testar com GET</a>
            <a href="post.php" class="text-center bg-blue-600 text-white py-2 rounded"> Testar com POST</a>
        </div>

    </div>
</body>
</html>