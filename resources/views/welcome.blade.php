@extends('layout')
@section('content')
    <div class="container">
        @foreach ($articles as $article)
            titre : {{ $article->titre }} <br>
            Prix : {{ $article->prix }} <br>
            Description : {{ $article->description }} <br>
            Details : <a href="{{route('details',['id'=>$article->id])}}" class="btn btn-primary">details</a>
            <img src="{{asset('storage/'.$article->photo)}}" alt="photo">
        @endforeach
    </div>

@endsection
