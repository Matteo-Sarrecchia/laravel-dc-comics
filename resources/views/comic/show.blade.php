@extends("layouts.main-layout")

@section("content")

    <div class="text-center">
        <h1>{{ $comic -> title }}</h1>
        <h4>{{ $comic -> series}}</h4>
        <div class="row justify-content-center py-4">
            <img src="{{ $comic -> thumb }}" class="rounded" style="max-width: 300px;">
            <p class="col" style="max-width: 40%;">{{ $comic -> description }}</p>
        </div>
        <div>
            <span class="col fw-bold"> Prezzo: {{ $comic -> price }}</span>
            <span class="col">Data di vendita: {{ $comic -> sale_date }}</span>
            <span class="col">Genere: {{ $comic -> type }}</span>
        </div>
    </div>

@endsection