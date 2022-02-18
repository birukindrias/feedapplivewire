@extends('layout.layout')
@section('content')

<div class="mx-40  w-70 h-screen bg-gradient-to-r from-cyan-500 to-blue-500">
    <div class="pt-2 mx-2">
        @auth
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <textarea class="w-full h-full rounded-sm outline-none " name="body" id="" rows="3" cols="10"></textarea>
            <button class="bg-gradient-to-r from-cyan-500 to-yellow-500 mt-2 p-1 rounded-sm" type="submit">Post</button>
        </form>
        @endauth

    </div>
    @foreach ($posts as $post)
<x-post :post="$post"/>
    @endforeach

</div>






@endsection