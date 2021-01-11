@extends('layouts.main')

@section('content')

<main>
    <div class="wrapper">
        <img src="{{$charFiltered['image']}}" alt="{{$charFiltered['first-name']}} {{$charFiltered['last-name']}}">
        <h1>{{$charFiltered['first-name']}} {{$charFiltered['last-name']}}</h1>
        <p>{{$charFiltered['gender']}}</p>

        <ul class="no-list">
            @foreach ($charFiltered['sayings'] as $item)
                <li>
                    {{$item}}
                </li>
            @endforeach
        </ul>
    </div>
</main>


@endsection