@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center">

            @foreach ($pizzas as $pizza)
                <div class="card" style="width: 18rem; margin:1rem; padding:0.5rem">
                    @if (isset($pizza['imagem']))
                        <img src='{{ asset("storage/{$pizza->imagem}") }}' alt="{{ $pizza->imagem }}" class="card-img-top"
                            height=270 width=270>
                    @else
                        <img src="{{ asset('storage/imagens/padrao.png') }}" alt="{{ $pizza->imagem }}" height=270 width=270>
                    @endif

                    <div class="card-body" style="height: 9rem">
                        <h5 class="card-title">{{ $pizza['sabor'] }}</h5>
                        <p class="card-text">{{ $pizza['descricao'] }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">R$ {{ $pizza['preco'] }}</li>
                    </ul>
                    <div class="card-body">


                        <a href="edita/{{$pizza['id']}}" class="card-link">
                            <button type="button" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z">
                                    </path>
                                </svg>
                            </button>
                        </a>

                        <a href="apaga/{{ $pizza['id'] }}" class="card-link">
                            <button type="button" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z">
                                    </path>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
            {!! $pizzas->links() !!}
        </div>

    </div>
@endsection
