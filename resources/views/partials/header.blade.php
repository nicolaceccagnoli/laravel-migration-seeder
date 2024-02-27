@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/trains',
            'label' => 'Tutti i treni',
            'active' => true,
        ],
    ];
@endphp

<header>
    <nav>
        <ul class="d-flex justify-content-around">
            @foreach ($links as $link)
                <li class="list-unstyled">
                    <a class="text-decoration-none" href="{{ $link['url'] }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
