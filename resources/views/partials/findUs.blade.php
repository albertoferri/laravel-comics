@php
$items = [
    ['img' => Vite::asset('resources/img/buy-comics-digital-comics.png'), 'label' => 'Digital comics'],
    ['img' => Vite::asset('resources/img/buy-comics-merchandise.png'), 'label' => 'DC merchandise'],
    ['img' => Vite::asset('resources/img/buy-comics-subscriptions.png'), 'label' => 'Subscription'],
    ['img' => Vite::asset('resources/img/buy-comics-shop-locator.png'), 'label' => 'Comic shop locator'],
    ['img' => Vite::asset('resources/img/buy-dc-power-visa.svg'), 'label' => 'DC power visa']
];
@endphp

<div class="container-fluid pt-3">
    <ul id="libraries" class="d-flex list-unstyled justify-content-center gap-3">
        @foreach ($items as $item)
            <li>
                <img src="{{ $item['img'] }}" alt="{{ $item['label'] }}">
                <span>{{ $item['label'] }}</span>
            </li>
        @endforeach
    </ul>
</div>
