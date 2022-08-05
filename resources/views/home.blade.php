@extends('layout.app')

@section('content')
<section class="my-14 bg-white rounded-3xl p-10 h-auto">
  <p class="text-3xl text-gray-600 font-bold text-center">Artikel Terbaru</p>

  @foreach ($posts as $item)
  <div class="mt-10">
    <div class="flex flex-wrap">
      <a href="{{ url('/article', $item->slug ) }}" class="w-5/12 rounded-xl h-72 overflow-hidden flex items-center justify-center">
        <img src="{{ $item->getFirstMediaUrl('posts', 'thumb') }}" class="rounded-xl w-full bg-cover" alt="thumbnail">
      </a>
      <div class="w-7/12 px-10">
        <div class="flex flex-wrap h-full">
          <div class="w-full">
            <a href="{{ url('/article', $item->slug ) }}" class="text-2xl font-medium text-violet-500 hover:underline">{{ $item->title }}
            </a>
            <div class="mt-4">
              <a href="{{ url('/article', $item->slug ) }}" class="text-base font-normal text-gray-500">{{  Str::limit( strip_tags( $item->content ), 170 ) }}
              </a>
            </div>
          </div>
          <div class="w-full self-end mb-5">
            <span class="font-medium">Post <span class="text-violet-500">{{ $item->created_at->isoFormat('dddd, D MMM Y') }}</span></span>
            <div class="flex gap-3 mt-3">
              <span class="font-medium">Tags:</span>
              <div>
                @foreach ($item->tags as $tags)
                <span class="px-2 py-1 bg-violet-100 text-violet-600 rounded-md ms-1">#{{ $tags->name }}</span>
                @endforeach
                <span class="px-2 py-1 bg-violet-100 text-violet-600 rounded-md ms-1">#html</span>
                <span class="px-2 py-1 bg-violet-100 text-violet-600 rounded-md ms-1">#php</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

</section>
@endsection