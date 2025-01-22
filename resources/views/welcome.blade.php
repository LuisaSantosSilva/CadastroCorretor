<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro de Corretor</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container text-center">
            <div class="container mt-5">
                <h2>Cadastro de Corretor</h2><br>
                <form method="POST" action="/adicionar">
                    @csrf
                    <div class="form-group mb-2 flex-container">
                        <!-- Campo CPF --> 
                        <div class="form-group input-field">
                            <input type="text" class="form-control" maxlength="11" name="cpf" placeholder="Digite seu CPF" required>
                        </div>

                        <!-- Campo Creci -->
                        <div class="form-group input-field">
                            <input type="text" class="form-control" minlength="2" name="creci" placeholder="Digite seu Creci" required>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <input type="text" class="form-control" minlength="2" name="nome" placeholder="Digite seu nome" required>
                    </div>
                    <button type="submit" class="btn-custom w-100">Enviar</button>
                </form>

                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Creci</th>
                            <th scope="col">CPF</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($corretor) > 0)
                            @foreach ($corretor as $cont)
                                <tr>
                                    <th>{{ $cont->id }}</th>
                                    <th>{{ $cont->nome }}</th>
                                    <th>{{ $cont->creci }}</th>
                                    <th>{{ $cont->cpf }}</th>
                                    <th><a href="/editar/{{ $cont->id }}" class="btn btn-outline-success">Editar</a>
                                        <a href="/excluir/{{ $cont->id }}" class="btn btn-outline-danger">Excluir</a>
                                    </th>
                                </tr>
                            @endforeach
                        @else
                            
                        @endif
                    </tbody>
                </table>
                
                <!-- Referência ao arquivo JavaScript -->
                <script src="{{ asset('js/validacao.js') }}"></script>
            </div>
        </div>
    </body>
</html>