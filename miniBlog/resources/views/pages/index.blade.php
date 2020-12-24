@extends('layouts.app')

@section('content')

    @if(auth()->user())
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary btn-lg" href="/posts">See All Posts</a>
        </div>

    @else()
        <div class="jumbotron text-center">
            <h1>Welcome To DiA-blog</h1>
            <p>Login or register to post</p>
            <p><!--suppress HtmlUnknownTarget -->
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <!--suppress HtmlUnknownTarget -->
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
            </p>
        </div>
    @endif

@endsection
