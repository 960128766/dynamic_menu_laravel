<ul>
    @foreach($childs as $child)
    <li>
        {{$child->table}}
        @if(count($child->childs))
            @include('menu.manageChild',['childs'=>$child->childs])
        @endif
    </li>
    @endforeach
</ul>
