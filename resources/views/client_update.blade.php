<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela de Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-y6ADZHdOVHsQSfGFQKGg0+peK4GPhFGg8RM1en8vjv2vD47Lv/iFV+nFMaQpg7Hf" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h1 class="mt-4 mb-3">Formulário de Edição de Cliente</h1>
    <form action="{{route('client.update', ['client' => $client])}}" method="POST">
    @method('PUT')
      @csrf
      <div class="mb-3">
        <label for="id" class="form-label">ID:</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$client->id}}" readonly>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$client->name}}">
      </div>
      <button type="submit" class="btn btn-primary">Atualizar Cliente</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-l3xv9mQpAqj7QA6zlgF5uvZo0I8DpPP9JPujf7ldC/5nqdWRX4NwcRyp0jpcQ41Q" crossorigin="anonymous"></script>
</body>
</html>
