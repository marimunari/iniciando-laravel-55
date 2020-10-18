<html>
<head></head>
<body>
<h1>Listar clientes</h1>
<a href="/admin/client/form-register">Novo cliente</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->email}}</td>
            <td>
                <a href="{{"/admin/client/{$client->id}/form-edit"}}">Editar</a> |
                <a href="{{"/admin/client/{$client->id}/delete"}}"
                   onclick="event.preventDefault();if(confirm('Deseja excluir este registro?')){window.location.href='{{"/admin/client/{$client->id}/delete"}}'}">Excluir</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>