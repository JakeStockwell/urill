<div>
    @foreach($categories as $category)
        <ul>
            @foreach($category as $item => $collection)
                <li>
                    <h4>{{ $collection }}</h4>
                </li>
            @endforeach
        </ul>
    @endforeach
</div>
