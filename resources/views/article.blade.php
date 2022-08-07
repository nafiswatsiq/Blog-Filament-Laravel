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
      <p class="font-medium text-gray-400 mt-5 text-sm"><span class="text-violet-500">{{ $post->created_at->isoFormat('dddd, D MMM Y') }}</span> <span class="text-sm font-normal">by <i class="uil uil-user-circle"></i>{{ $post->user->name }}</span></p>
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
      <p class="font-semibold text-gray-500">Artikel lainya</p>
      @foreach ($recentPost as $item)    
      <div class="flex flex-wrap my-2 py-4 shadow rounded-lg">
        <a href="{{ url('article', $item->slug) }}" class="w-4/12">
          <img src="{{ $item->getFirstMediaUrl('posts', 'thumb') }}" alt="">
        </a>
        <div class="w-8/12">
          <div class="flex flex-wrap h-full">
            <div class="w-full">
              <a href="{{ url('article', $item->slug) }}" class="text-gray-700 font-semibold hover:text-violet-500" title="{{ $item->title }}">{{  Str::limit( strip_tags( $item->title ), 30 ) }}</a>
            </div>
            <div class="w-full self-end">
              <p class="text-sm text-violet-500"><i class="uil uil-clock"></i> {{ $item->created_at->isoFormat('dddd, D MMM Y') }}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection