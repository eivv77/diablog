@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex text-center w-100">
            <h1>Posts</h1>
        </div>
        <div class="row">
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="col-4">
                        <img style="width: 50%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                        <a href="/posts/{{$post->id}}" class="card mb-3 text-decoration-none text-dark">
                            <div class="card-body">
                                <h5 class="card-title"><p>{{$post->title}}</p></h5>
                                <p class="card-text"><small>Written on {{$post->created_at}} by {{$post->user->name}}</small></p>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{$posts->links()}}
            @else
                <p class="w-100 text-center my-5">No posts found</p>
            @endif
        </div>
    </div>


@endsection
