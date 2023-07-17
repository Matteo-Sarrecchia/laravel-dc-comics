@extends("layouts.main-layout")

@section("content")

    <div class="text-center py-5">
        <h1>{{ $comic -> title }}</h1>
        <h4>{{ $comic -> series}}</h4>
        <div class="row justify-content-center py-4">
            <img src="{{ $comic -> thumb }}" class="rounded" style="max-width: 300px;">
            <p class="col" style="max-width: 40%;">{{ $comic -> description }}</p>
        </div>
        <div class="border border-black p-3 rounded d-flex justify-content-between" style="width: 50%; margin:auto;">
            <div>
                <span class="fw-bold">Prezzo:</span>
                <span class="col">{{ $comic -> price }}</span>
            </div>
            <div>
                <span class="fw-bold">Data di vendita:</span>
                <span class="col">{{ $comic -> sale_date }}</span>
            </div>
            <div>
                <span class="fw-bold">Genere:</span>
                <span class="col">{{ $comic -> type }}</span>
            </div>
        </div>
    </div>

@endsection