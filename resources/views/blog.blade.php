@extends('layout.layout')
@section('title', 'Blog')

@section('content')
    <div class="container mt-3">
        <div class="row">
            @foreach ($data as $item)
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="{{url('/images/avatar.png')}}" alt="Avatar">
                <h3 class="text-center">{{ $item['title'] }}</h3>
                <p class=" text-justify">
                    {{ $item['body'] }}
                </p>
                <button class="btn btn-secondary">{{ $item['auther'] }}</button>
            </div>
            @endforeach
        </div>
    </div>
@endsection
