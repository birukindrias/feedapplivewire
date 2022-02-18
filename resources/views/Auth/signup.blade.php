@extends('layout.layout')
@section('content')



<div class="mt-20 mx-40 pb-3 px-3 shadow-lg shadow-slate-600 bg-gradient-to-r from-cyan-500 to-blue-500  rounded-lg">
<form action="{{route('store')}}" method="post">
@csrf

<div class="text-center pt-4">Create an Account</div>

<div class="flex flex-col">
    <label class="py-2" for="name">Name</label>
    <input class="rounded-sm"  type="text" name="name">
</div>
<div class="flex flex-col">
    <label class="py-2" for="name">Username</label>
    <input class="rounded-sm"  type="text" name="username">
</div>
<div class="flex flex-col">
    <label class="py-2" for="name">E-Mail</label>
    <input class="rounded-sm"  type="text" name="email">
</div>
<div class="flex flex-col">
    <label class="py-2" for="name">Password</label>
    <input class="rounded-sm"  type="text" name="password">
</div>
<div class="flex flex-col">
    <label class="py-2" for="name">Confuirm Password</label>
    <input class="rounded-sm" type="text" name="password_confirmation">
</div>
<div class="flex mt-5 bg-gradient-to-r from-cyan-500 to-yellow-500 rounded-sm my-3 mt-3 flex-col">
    <button type="submit" class="py-2 text-gray-40">submit</button>
</div>
</div>
</form>









<!-- 

  <form action="{{route('store')}}" method="post">
      @csrf
      <div class="mb-4 form-group flex flex-col">
          <label class="p-5 mb-4 w-20" for="name">Name</label>
          <input  class="bg-gray-500" type="text" name="name" id="">
      </div>
      <div class="mb-4 form-grup flex flex-col">
          <label class="p-5 mb-4 w-20" for="username">userName</label>
          <input  class="bg-gray-500" type="text" name="username" id="">
      </div>
      <div class="mb-4 form-group flex flex-col">
          <label class="p-5 mb-4 w-20" for="email">email</label>
          <input  class="bg-gray-500" type="text" name="email" id="">
      </div>
      <div class="mb-4 form-group flex flex-col">
          <label class="p-5 mb-4 w-20" for="password">password</label>
          <input  class="bg-gray-500" type="text" name="password" id="">
      </div>
      <div class="mb-4 form-group flex flex-col">
          <label class="p-5 mb-4 w-20" for="password_confirmation">confuirm password</label>
          <input  class="bg-gray-500" type="text" name="password_confirmation" id="">
      </div>
      <button type="submit">submit</button>
  </form> -->
@endsection