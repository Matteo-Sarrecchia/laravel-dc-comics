@extends("layouts.main-layout")

@section("content")

    <div class="text-center py-3">
        <h3>
             CREATE NEW COMIC
        </h3> 

        <form method="POST" action="{{ route('comics.store') }}">

            @csrf

            <label class="fw-bold" for="title">Titolo</label>
            <br>
            <input style="width: 50%;" class="mb-3" type="text" name="title">
            <br>

            <label class="fw-bold" for="description">Descrizione</label>
            <br>
            <input style="width: 50%;" class="mb-3" type="text" name="description">
            <br>

            <label class="fw-bold" for="thumb">Path Immagine</label>
            <br>
            <input style="width: 50%;" class="mb-3" type="text" name="thumb">
            <br>

            <label class="fw-bold" for="price">Prezzo</label>
            <br>
            <input style="width: 50%;" class="mb-3" type="text" name="price">
            <br>

            <label class="fw-bold" for="series">Serie</label>
            <br>
            <input style="width: 50%;" class="mb-3" type="text" name="series">
            <br>

            <label class="fw-bold" for="sale_date">Data di vendita</label>
            <br>
            <input style="width: 50%;" class="mb-3" type="text" name="sale_date">
            <br>

            <label class="fw-bold" for="type">Genere</label>
            <br>
            <input style="width: 50%;" class="mb-3" type="text" name="type">
            <br>

            <input class="my-3" type="submit" value="CREATE">
        </form>
        
    </div>

@endsection