<x-layout_1>
    <div class="inner_container">
        <div class="body">
            @foreach($clients as $client)
                <article>
                    <h1>{{ $client->title }}</h1>
                    <p>{!! $client->body !!}</p>
                </article>
            @endforeach
        </div>
        <div class="menu">
            <x-menu :items="$menu_items"></x-menu>
        </div>
    </div>
</x-layout_1>
