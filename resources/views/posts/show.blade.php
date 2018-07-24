@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default"> Go Back</a>
    <!-- Getting title of post -->
    <center><h5>{{$post->title}}</h5></center>
     <br>
     <!-- Getting image of post -->
    <img style ="width:100%;height:40%" src="/storage/cover_images/{{$post->cover_image}}">               
    <div>
     <br>
     <!-- Getting body/ post content of post -->
        {!!$post->body!!}
    </div>
        <!-- Getting Author of post -->
        <h5><font color="green">Posted by {{$post->user['name']}}</font></h5>   
        On&nbsp;&nbsp; 
        <!-- Getting time of post -->
        <font color="red"><small>{{$post->created_at}} </font></small>
                    
            <hr>
            <!-- Checking if your are the author of the post -->
         @if(!Auth::guest())
         @if(Auth::user() ->id == $post ->user_id)
            <!--post edit-->
            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit Post</a>

            <!--post delete-->
            {!! Form::open(['action'=> ['PostController@destroy', $post->id], 'method' =>'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete Post', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
    
    <hr>
    <div class="fb-comments" data-href="http://hkibet.com" data-width="560" data-numposts="10"></div>
</div>
 @endsection
 
  