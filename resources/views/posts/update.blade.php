@extends('layouts.app')

@section('title' , 'update-post')
@section('content')
    <h1 style="color: green" class=" margin size">Update Post</h1>
    <form class="form  margin size" action="/post/{{$post->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <label class="form-label" for="title" >title</label>
        <input class="form-control" type="text" id="title" name="title" value="{{$post->title}}">
        <label class="form-label" for="description">description</label>
        <textarea class="form-control" name="description" id="description" cols="10" rows="10">{{$post->description}}</textarea>
        <img class="pic" src="/images/{{$post->image}}" alt="">
        <input class="form-control" type="file" id="img" name="image">
        <input class="btn btn-success btn-lg top" type="submit" value="Update">
    </form> 
@endsection