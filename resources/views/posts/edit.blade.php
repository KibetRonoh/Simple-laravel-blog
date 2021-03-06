@extends('layouts.app')

@section('content')
    <h3>Edit Post</h3>
   {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="formgroup">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="formgroup">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('submit', ['class' => 'btn btn-lg btn-primary'])}}
{!! Form::close() !!}
</div>
<br>
@endsection