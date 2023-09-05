@extends('layout')


@section('content')
    <center>
        <h2>details</h2>
    </center>
    <div class="container">
        titre : {{ $article->titre }} <br>
        Prix : {{ $article->prix }} <br>
        Description : {{ $article->description }} <br>
    </div>
    <div class="container">
        <form action="{{ route('coment.create', ['id' => $article->id]) }}" method="post" class="formgroup">
            @csrf
            <textarea name="contenue" id="" cols="30" rows="10" class="form-control"></textarea>
            <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
    <div class="container">
        @foreach ($coments as $content)
            content :{{ $content->contenue }} <br>
        @endforeach
    </div>
@endsection
