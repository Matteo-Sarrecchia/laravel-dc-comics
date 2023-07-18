@extends("layouts.main-layout")

@section("content")

    <div class="text-center p-4">
        <h3 class="py-3">
            ADD COMICS 
            <a href="{{ route('comic.create') }}" class="link-offset-2 link-underline link-underline-opacity-0">(+)</a>
        </h3>
        <ul class="list-unstyled">
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('comic.show', $comic -> id) }}" class="link-offset-2 link-underline link-underline-opacity-0">
                        {{ $comic -> title }}
                    </a>
                    <a class="mx-3 btn btn-primary" href="{{ route('edit', $comic -> id) }}">
                        EDIT
                    </a>

                    <form class="d-inline" method="POST" action="{{ route('destroy', $comic -> id) }}">
                            @csrf
                            @method('DELETE')
    
                            <input class="mx-3 btn btn-primary" type="submit" value="DELETE">
                    </form>
                </li>
            @endforeach
        </ul>

    </div>

@endsection