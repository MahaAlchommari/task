@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if (isset($posts) && count($posts) > 0)
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->description }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No posts found</p>
    @endif
@endsection
