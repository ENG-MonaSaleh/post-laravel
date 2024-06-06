@extends('layouts.app')

@section('title' , 'index-post')
@section('content')
    <a class="btn btn-outline-primary btn-lg margin" href="/add">ADD POST</a>
    <table class="table margin size">
        <thead class="table-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Show</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr scope="row">
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td><a class="btn btn-outline-secondary" href="/post/{{$post->id}}">Show</a></td>
                    <td><a class="btn btn-outline-success" href="/edit/{{$post->id}}">Update</a></td>
                    <td><form action="/delete/{{$post->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-outline-danger" type="submit" value="Delete">
                    </form></td>
                </tr>
            @empty
                <p>there is no posts </p>
            @endforelse
        </tbody>
    </table>
@endsection