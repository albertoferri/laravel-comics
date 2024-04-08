@php
$comics = config('db');
@endphp

<div class="comic-list d-flex justify-content-center flex-wrap mx-auto ">

    @foreach ($comics as $comic)
        <div class="comic">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <h4>{{ $comic['title'] }}</h4>
        </div>
    @endforeach
</div>