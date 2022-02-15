@extends('layouts.app')

@section('main')
    @foreach ($articles as $article)
        <h1 class="text-white text-4xl my-4 px-10 font-bold">{{$article->title}}</h1>
        <p class="text-white text-6xl ">
            {{$article->slug}}
        </p>
        <p>
            {{$article->description}}
        </p>
        <img src="/storage/{{$article->photopath}}">
    @endforeach
@endsection