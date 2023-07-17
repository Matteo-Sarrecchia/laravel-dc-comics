@extends("layouts.main-layout")

@section("content")

    <div class="text-center">
        <h1>
            ADD COMICS (+)
            {{-- <a href="{{ route('pastas.create') }}">+</a> --}}
        </h1>
        <ul class="list-unstyled">
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('comic.show', $comic -> id) }}">
                        {{ $comic -> title }}
                    </a>
                </li>
            @endforeach
        </ul>

    </div>

@endsection