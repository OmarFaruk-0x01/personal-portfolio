@extends('layouts.app')

@section('page_content')
    <div class="mt-24 py-5 px-20">
        <h2 class="text-3xl font-semibold">{{$project['name']}}</h2>
        <div class="flex flex-wrap gap-2 items-center mt-2">
            @foreach($project['tags'] as $tag)
                <span class="px-2 py-1 bg-blue-400 text-white text-xs rounded-sm">{{$tag}}</span>
            @endforeach
        </div>
    </div>
    <div class="grid grid-cols-[1fr_auto] mt-5 p-20 pt-0 gap-5">
        <div>
            <a href="{{$project['live']}}" target="_blank">
            <img src="{{$project['thumbnail']}}"/>
            </a>
            <p class="mt-5 text-md text-gray-500">
                {{$project['description']}}
            </p>
        </div>
        <div>
            <div class="bg-blue-100 w-[500px] p-5">
                <h4 class="text-xl font-bold text-blue-500 mb-5">Project Info</h4>
                <div class="flex items-center justify-between my-2">
                    <h5 class="text-md font-semibold ">Date</h5>
                    <span class="text-gray-500">{{$project['date']}}</span>
                </div>
                <div class="flex items-center justify-between my-2">
                    <h5 class="text-md font-semibold ">Category</h5>
                    <span class="text-gray-500">{{$project['category']}}</span>
                </div>
                @if (!is_null($project['live']))
                    <a href="{{$project['live']}}" target="_blank" class="flex items-center justify-center bg-blue-500 w-full py-2 rounded text-white hover:bg-blue-600 active:bg-blue-700">Live Demo</a>
                @endif
            </div>
        </div>
    </div>

@endsection


@push('styles')
    <script src="https://cdn.tailwindcss.com"></script>
@endpush
