@extends('layouts.app')

@section('content')

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login</h2>
  </div>
  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
    @if (session('status'))
    <div class="p-4 rounded-lg mb-6 text-white text-center" style="background-color: red">
      {{ session('status') }}
    </div>
    @endif
    <form class="space-y-6" action="{{route('login')}}" method="POST">
      @csrf
      
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="email" value="{{old('email')}}" name="email" type="email" autocomplete="email"
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('email')
          <div class="mt-2 text-sm" style="color: red">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password"
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('password')
          <div class="mt-2 text-sm" style="color: red">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="mb-4">
        <div class="flex items-center">
          <input type="checkbox" name="remember" id="remember" class="mr-2">
          <label for="remember">Remember me</label>
        </div>
      </div>

      <div>
        <button type="submit"
          class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          login</button>
      </div>
    </form>

  </div>
</div>

@endsection