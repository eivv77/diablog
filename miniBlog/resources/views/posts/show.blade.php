@extends('layouts.app')

@section('content')
    <!--suppress HtmlUnknownTarget -->
    <a href="/posts" class="btn btn-secondary mb-3">Go Back</a>
    <h1>{{$posts->title}}</h1>
    <img style="width: 50%" src="/storage/cover_images/{{$posts->cover_image}}" alt="">
    <div>
        {{$posts->body}}
    </div>
    <hr>
    <small>Written on {{$posts->created_at}}</small>
    <hr>

    @if(!\Illuminate\Support\Facades\Auth::guest())
        @if(\Illuminate\Support\Facades\Auth::user()->id == $posts->user_id)
        <div class="d-flex justify-content-between">
            <a href="/posts/{{$posts->id}}/edit" class="btn btn-secondary ">Edit</a>

            {!!Form::open(['action' => ['\App\Http\Controllers\PostsController@destroy', $posts->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>
    @endif
    @endif
@endsection
