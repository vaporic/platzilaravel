@extends('layouts.default')

@section('content')

    <h1>Estos son nuestros post</h1>

    <ul class="list-unstyled">
        @foreach($posts as $post)
            <li>
                <p class="lead">
                    <a href="{{ route('post_show_path', $post->id) }}">{{ $post->title }}</a>
                </p>
                <br/>
                autor: {{ $post->user->name }}
                <br/>
                creado: {{ $post->created_at }}
                <hr/>
            </li>
        @endforeach
    </ul>

@stop