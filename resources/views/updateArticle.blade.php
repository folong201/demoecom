@extends('layout')

@section('content')
<div class="container">
    <form action="{{route('update.article.save')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$article->id}}">
       description <input type="text" name="description" value="{{$article->description}}"> <br>
        Prix : <input type="text" name="prix" value="{{$article->prix}}"> <br>
       Titre : <input type="text" name="titre" value="{{$article->titre}}"> <br>
        <button type="submit">Update</button>
    </form>
</div>
@endsection
