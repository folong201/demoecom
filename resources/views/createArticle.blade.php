@extends('layout')

@section('content')
<div class="container">
    <form action="{{route('article.create')}}" method="post" enctype="multipart/form-data">
        @csrf
       description <input type="text" name="description" > <br>
        Prix : <input type="text" name="prix" > <br>
       Titre : <input type="text" name="titre" > <br>
       Photo : <input type="file" name="photo">
        <button type="submit">Enregistrer</button>
    </form>
</div>
@endsection
