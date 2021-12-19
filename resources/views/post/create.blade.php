@extends('layouts.app')
@section('content')
    <div class="container">
<form action="{{route('post.store')}}"   method="post">
@csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control @if($errors->has('name')) is-invalid  @endif" name="name">
        @if( $errors->has('name'))
            <div class="text-danger"> {{$errors->first('name')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="description">Description</label>
    <input type="text" class="form-control  @if($errors->has('name')) is-invalid @endif"  name="description">
    @if( $errors->has('description'))
            <div class="text-danger"> {{$errors->first('description')}}</div>
    @endif
    </div>
    <input type="submit" class="btn btn-primary" value="save" name="save">

</form>
    </div>
@endsection
