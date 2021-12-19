@extends('layouts.AppLayout')
@section('content')
    <div class="container">

        <div class="card">

            <div class="card-header">
                {{$post->name}}
            </div>
            <div class="card-body">
                {{$post->description}}
            </div>
            <div class="card-footer">
                <i class="fa fa-user" aria-hidden="true"> user Name </i>
                <i class="fa fa-clock" aria-hidden="true"> {{ $post->created_at->format('d - m - Y') }}</i>

            </div>
        </div>

        <div class="card" style="margin-top: 2px;">

            <div class="card-header"> Post Comments</div>
             <div class="card-body">

             </div>

        </div>

        <div class="card" style="margin-top: 2px;">

<div class="card-header"> Add Comment</div>
<div class="card-body">
<form action="{{route('comment.store', $post->id)}}"   method="post">
@csrf

    <div class="form-group">
        <label for="description"></label>
    <input type="text" class="form-control  @if($errors->has('comment')) is-invalid @endif"  name="comment">
    @if( $errors->has('comment'))
            <div class="text-danger"> {{$errors->first('comment')}}</div>
    @endif
    </div>
    <input type="submit" class="btn btn-primary" value="save" name="save" style="margin: 3px;">

</form>
</div>
        </div>
    </div>
@endsection
