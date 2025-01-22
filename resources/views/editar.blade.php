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
                <form method="POST" action="/atualizar/{{$corretor->id}}">
                    @csrf
                    <div class="form-group mb-2 flex-container">
                        <!-- Campo CPF --> 
                        <div class="form-group input-field">
                            <input type="text" class="form-control" value="{{$corretor->cpf}}" maxlength="11" name="cpf" placeholder="Digite seu CPF" required>
                        </div>

                        <!-- Campo Creci -->
                        <div class="form-group input-field">
                            <input type="text" class="form-control" value="{{$corretor->creci}}" minlength="2" name="creci" placeholder="Digite seu Creci" required>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <input type="text" class="form-control" value="{{$corretor->nome}}" minlength="2" name="nome" placeholder="Digite seu nome" required>
                    </div>
                    <button type="submit" class="btn-custom w-100"> Salvar </button>
                </form>

                <!-- Referência ao arquivo JavaScript -->
                <script src="{{ asset('js/validacao.js') }}"></script>
            </div>
        </div>
    </body>
</html>