<div>
    @foreach($items as $item)
        <ul>
            @foreach($item as $item => $collection)
                <li>
                    <h4>{{ $collection }}</h4>
                </li>
            @endforeach
        </ul>
    @endforeach
</div>