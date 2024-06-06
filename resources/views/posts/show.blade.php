@extends('layouts.app')

@section('title' , 'show-post')
@section('content')

<h1 class="margin">Title: {{$post->title}}</h1>
<h3 class="margin">Description :{{$post->description}}</h3>
<div><img class="img" src="/images/{{$post->image}}" alt=""></div>
<a class="btn btn-dark btn-lg block" href="/">Go Back</a>

@endsection