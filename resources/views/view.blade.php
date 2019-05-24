

    <ul>
        @foreach ($cars as $car)
        <li>
           <a>{{$car->title}} </a>
        </li>
        @endforeach
    </ul>

