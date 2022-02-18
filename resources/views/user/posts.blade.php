@extends('layout.layout')
@section('content')
<div class="mx-40">
<div class="px-4">
    <div class="font-bold">
    {{$user->name}}

    </div>

{{$user->likerecived()->count()}}
{{Str::plural('like',$user->likerecived()->count())}}
recived
{{$user->post()->count()}}
{{Str::plural('post',$user->post()->count())}}
posted








</div>
<!-- @foreach ($posts as $post) -->

<div class="post">
<x-post :post="$post"/>

</div>
<!-- @endforeach -->

</div>
@endsection