@extends('layout.app')

@section('content')
<style>
  .article p{
    margin: 0 0 15px 0;
  }
</style>
<div class="flex flex-wrap my-14">
  <div class="w-8/12 pr-5">
    <div class="bg-white p-8 rounded-2xl">
      <p class="font-bold text-2xl text-gray-500">{{ $post->title }}</p>
      <p class="font-medium text-gray-400 mt-5">Post <span class="text-violet-500">{{ $post->created_at->isoFormat('dddd, D MMM Y') }}</span></p>
      <div class="my-8">
        <img src="{{ $post->getFirstMediaUrl('posts', 'thumb') }}" class="w-full rounded-xl" alt="">
      </div>
      <div class="article">
        {!! $post->content !!}
      </div>
    </div>
  </div>
  <div class="w-4/12 pl-5">
    <div class="bg-white p-5 rounded-2xl">
      p
    </div>
  </div>
</div>
@endsection