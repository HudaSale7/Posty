@extends('layouts.app')
@section('content')
<div class="flex justify-center">
  <div class="w-full bg-white p-6 rounded-lg flex justify-center">
    @auth
    <form action="" method="post" class="mb-4 flex justify-center flex-col w-3/5">
      @csrf
      <div class="mb-4">
        <label for="body" class="sr-only">Body</label>
        <textarea name="body" id="body" cols="30" rows="4"
          class="block rounded-md border-0 py-1.5 w-full text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('body') border-red-500 @enderror"
          placeholder="Post something!"></textarea>

        @error('body')
        <div class="text-red-500 mt-2 text-sm">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div>
        <button type="submit" class="flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
      </div>
    </form>
    @endauth

  </div>
</div>
@endsection