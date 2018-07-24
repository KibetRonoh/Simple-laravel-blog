@extends('layouts.app')

@section('content')

    <!-- Page Title  -->
    <center><h5>Recent Posts</h5></center><br>
    <!--//Page Title  -->
    @if(count($posts) > 0)
        @foreach($posts as $post)

        <!--Getting the post details from DB  -->
            <div class="well">
                <div class="row">
                     <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">  
                             <img style ="width:100%;height:200px" src="/storage/cover_images/{{$post->cover_image}}"><!-- Getting image -->
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <!--Getting Post title  -->
                            <h5><a href="/posts/{{$post->id}}">{{$post -> title}}</h5></a>
                            <!--Getting post user name  -->
                            <h6><font color="green">Posted by {{$post->user['name']}}</font></h6>   
                            On&nbsp;&nbsp; 
                            <!-- Getting time of post -->
                            <font color="red"><small>{{$post->created_at}} </font></small>
                         </div>
                     </div>
                </div>
            </div>
        <!--//Getting the post details from DB  -->
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
    <br>
    <br>
</div>
@endsection