<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Cliente</title>
</head>
<body>
    <h1>Registrar novo cliente</h1>
    <form method="post" action="admin/client/register">
        {{ csrf_field() }}
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>