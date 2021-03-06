<a href="{{ $route }}" class="
    text-decoration-none
    text-body
">
    <div class="
        card
        inventory
        @isset($classes)
            @foreach($classes as $class)
                {{$class}}
            @endforeach
        @endisset
    ">
        <div class="card-body">
            @isset($img)
                {!! $img !!}
            @endisset
            <h2 class="card-title">{{ $title }}</h2>
            @isset($text)
            <p class="card-text">{{ $text }}</p>
            @endisset
        </div>
    </div>
</a>
