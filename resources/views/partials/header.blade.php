@php
$links = [
    'characters',
    'comics',
    'movies',
    'tv',
    'games',
    'collectibles',
    'videos',
    'fans',
    'news',
    'shop',
];
@endphp

<div class="container">
    <nav>
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=" DC logo">
        <ul>
            @foreach ($links as $link)
                <li>{{ $link }}</li>
            @endforeach
        </ul>
    </nav>
</div>