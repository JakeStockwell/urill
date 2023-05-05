<x-layout_1>
    @foreach($clients as $client)
        <article>
            <h1>{{ $client->title }}</h1>
            <p>{!! $client->body !!}</p>
        </article>
    @endforeach
</x-layout_1>
