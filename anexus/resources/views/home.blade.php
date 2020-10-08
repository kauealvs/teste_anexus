@extends('layout.layout')

@section('conteudo')
    <div class="container-fluid title">
        <h1>Anexus</h1>
    </div>
    <div class="row">
    <form action="/cadastra" method="POST" class="form">
            {{ csrf_field() }}
            <span class="col-3">Insira um usúario:</span>
            <input class="form-control col-md-4" name="name" id="name" class="form-control input" placeholder="nome do usuário" type="text">
            <button type="submit" value="submit" name="submit" class="btn btn-outline-success col-md-3">CADASTRAR</button>
        </form>
    </div>
    <div>
        <div style="display: none">
            {{$registro = $registros->find(1)}}
        </div>
        <div class="row">
            @foreach($registros as $registro)
                @if ($registro->id == 1)
                    <div class="col-12 reg">
                        <h1>{{$registro->name}}</h1>
                    </div>
                @endif
                @if ($registro->id == 2)
                    <div class="col-6 reg">
                        <p>{{$registro->name}}</p>
                    </div>
                @endif
                @if ($registro->id == 3)
                    <div class="col-6 reg">
                        <p>{{$registro->name}}</p>
                    </div>
                @endif
                @if ($registro->id == 4 || $registro->id == 5 || $registro->id == 6)
                    <div class="col-4 reg">
                        <p>{{$registro->name}}</p>
                    </div>
                @endif
                @if ($registro->id == 7 || $registro->id == 8 || $registro->id == 9 || $registro->id == 10)
                    <div class="col-3 reg">
                        <p>{{$registro->name}}</p>
                    </div>
                @endif
            @endforeach
    </div>
    </div>
@endsection
