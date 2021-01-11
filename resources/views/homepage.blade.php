@extends('layouts.main')

@section('content')

<main>
    <section class="hero">
        <div class="wrapper hero-img">
            <ul class="characters no-list">
                @foreach ($data as $item)
                <li class="pt-5">
                    <a href="{{route('about', $item['id']) }}" class="no-list">
                        <img src="{{$item['image']}}" alt="{{$item['first-name']}} {{$item['last-name']}}">
                        <h2>Name: {{$item['first-name']}} {{$item['last-name']}}</h2>
                        <p>Species: {{$item['species']}}</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
</main>
    
@endsection