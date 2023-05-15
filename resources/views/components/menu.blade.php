<div>
    @foreach($items as $k => $item)
        <ul>
        @if(!$item)
            <li><a href="{{$k}}">{{$k}}</a></li>
        @else
            <li><a href="{{$k}}">{{$k}}</a></li>
            <ul>
                @foreach($item as $item => $collection)
                    <li>
                    <a href="{{$collection}}">{{$collection}}</a>
                    </li>
                @endforeach
            </ul>
        @endif
        </ul>
    @endforeach
</div>