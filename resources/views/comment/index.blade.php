@extends('layouts.AppLayout')

@section('content')
    <div class="container">
    <div class="row">
<div class="col-md-4">

    <div class="card">

        <div class="card-header">
            Post Category
        </div>
        <div class="card-body">

        </div>


    </div>
</div>
<div class="col-md-8">

    <div class="card">

        <div class="card-header">
            Latest Post
        </div>
        <div class="card-body">
            @if($posts)
            @foreach($posts as $post)
                    <div class="card" style="margin-top: 2px;">
                        <div class="card-body">
                            <h4>{{$post->name}}</h4>
                            <p>{{$post->description}} <a href="{{route('comment.create',$post->id)}}">Comment</a></p>
                            <p>
                            <i class="fa fa-user" aria-hidden="true"> user Name </i>
                              <i class="fa fa-clock" aria-hidden="true"> {{ $post->created_at->format('d - m - Y') }}</i>
                            </p>

                        </div>
                    </div>
                @endforeach
                @endif
        </div>


    </div>
</div>
    </div>
    </div>
@endsection