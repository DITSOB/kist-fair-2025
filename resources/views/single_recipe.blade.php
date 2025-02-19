@extends('Layout.master')
@section('content')


    <div class="post-container">
        <h1 style="margin-top: 20px;">{{ $recipe->title }}</h1>
        <p class="card-text"><small class="text-muted"><i class="bi bi-person"></i>{{ $recipe['servings'] }}</small></p>
    </div>
    <div class="post-container">
        <div class="card" style="width: 1000px;">
            <img class="card-img-top" src="{{ asset('img/' . $blogs->image ); }}" alt="Card image cap" style="object-fit: cover;">
            <div class="card-body">
                <p class="card-text"><small class="text-muted"><i class="bi bi-person"></i>{!! nl2br(e($recipe->ingredients)) !!}</small></p>
                <p class="card-text"><small class="text-muted"><i class="bi bi-clock"></i>{!! nl2br(e($recipe->instructions)) !!}</small></p>
            </div>
            <div style="display: flex; justify-content: flex-start;">
            </div>
        </div>
    </div>

@endsection