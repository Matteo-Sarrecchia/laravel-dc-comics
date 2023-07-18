@extends("layouts.main-layout")

@section("content")

    <div class="text-center py-3">
        <h3>
            EDIT COMIC
        </h3> 

        <form method="POST" action="{{ route('update', $comic -> id) }}">

            @csrf
            @method('PUT')

            <label class="fw-bold" for="title">Titolo</label>
            <br>
            <input type="text" name="title" value="{{ $comic -> title}}" style="width: 50%;" class="mb-3">
            <br>

            <label class="fw-bold" for="description">Descrizione</label>
            <br>
            <input type="text" name="description" style="width: 50%;" class="mb-3" value="{{ $comic -> description}}">
            <br>

            <label class="fw-bold" for="thumb">Path Immagine</label>
            <br>
            <input type="text" name="thumb" style="width: 50%;" class="mb-3" value="{{ $comic -> thumb}}">
            <br>

            <label class="fw-bold" for="price">Prezzo</label>
            <br>
            <input type="text" name="price" style="width: 50%;" class="mb-3" value="{{ $comic -> price}}">
            <br>

            <label class="fw-bold" for="series">Serie</label>
            <br>
            <input type="text" name="series" style="width: 50%;" class="mb-3" value="{{ $comic -> series}}">
            <br>

            <label class="fw-bold" for="sale_date">Data di vendita</label>
            <br>
            <input type="text" name="sale_date" style="width: 50%;" class="mb-3" value="{{ $comic -> sale_date}}">
            <br>

            <label class="fw-bold" for="type">Genere</label>
            <br>
            <input type="text" name="type" style="width: 50%;" class="mb-3" value="{{ $comic -> type}}">
            <br>

            <input class="my-3" type="submit" value="CREATE">
        </form>
        
    </div>

@endsection