<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    {{-- {{$articles}} --}}
                    @foreach ($articles as $art)
                        <div class="container">
                            Name : {{ $art->titre }} <br>
                            descrption : {{ $art->description }} <br>
                            price : {{ $art->prix }} <br>
                            Details : <a href="{{ route('details', ['id' => $art->id]) }}" class="btn btn-primary">details</a>
                            suprimer : <a href="{{ route('article.delete', ['id' => $art->id]) }}" class=" btn btn-danger">Delete</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
