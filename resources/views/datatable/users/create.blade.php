@extends('master')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h5>Formulário de Usuário</h5>
                <hr>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="name" id="nome">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('users.index') }}" class="btn btn-success">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
    
@endsection

@section('js')
    
@endsection