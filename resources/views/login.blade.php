<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="row" style="margin-top: 25px;">
        <div class="container">
            <div class="messages">
                @include('alerts')
            </div>
            <div class="col-md-4 table-bordered" style="margin: 0 auto;width: 50%;">
            <img src="{{ url('img/nurse.jpeg')}}" alt="TechNurse" style="margin-left:75px">
            <h4 style="text-align:center">Crie sua conta</h4>
            <form action="{{route('autenticar')}}" method="post" class="form-signin ">
                    {!! csrf_field() !!}
                    
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email"  name="email" placeholder="email@email.com.br" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password"  name="password" placeholder="Digite a senha" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary form-control">LOGIN</button>
                    </div>
                    <div class="form-group">
                        <a href="{{route('formulario')}}" class="btn btn-success form-control">NOVO CADASTRO</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>