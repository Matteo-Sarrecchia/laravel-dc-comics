@extends("layouts.main-layout")

@section("content")

    <div class="text-center">
        <h3>
            NEW COMIC
        </h3> 

        <form method="POST" action="{{ route('pastas.store') }}">

            @csrf

            <label for="title">Titolo</label>
            <br>
            <input type="text" name="title">
            <br>

            <label for="description">Descrizione</label>
            <br>
            <input type="text" name="description">
            <br>

            <label for="thumb">Path Immagine</label>
            <br>
            <input type="text" name="thumb">
            <br>

            <label for="price">Prezzo</label>
            <br>
            <input type="text" name="price">
            <br>

            <label for="series">Serie</label>
            <br>
            <input type="text" name="series">
            <br>

            <label for="sale_date">Data di vendita</label>
            <br>
            <input type="text" name="sale_date">
            <br>

            <label for="type">Genere</label>
            <br>
            <input type="text" name="type">
            <br>

            <input class="my-3" type="submit" value="CREATE">
        </form>
        
    </div>

@endsection