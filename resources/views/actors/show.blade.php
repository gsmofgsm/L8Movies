@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $actor['profile_path'] }}" alt="parasite" class="w-64 md:w-96">
                <ul class="flex items-center mt-4">
                    @if($social['facebook'])
                    <li>
                        <a href="{{ $social['facebook'] }}" title="Facebook">
                            <svg class="fill-current text-gray-400 hover:text-white w-8" viewBox="0 0 14 16" fill="none"><path d="M14 2.5v11a1.5 1.5 0 01-1.5 1.5H9.834V9.463h1.894L12 7.35H9.834V6c0-.612.17-1.028 1.047-1.028H12V3.084A15.044 15.044 0 0010.369 3C8.756 3 7.65 3.984 7.65 5.794v1.56h-1.9v2.112h1.903V15H1.5A1.5 1.5 0 010 13.5v-11A1.5 1.5 0 011.5 1h11A1.5 1.5 0 0114 2.5z" /></svg>
                        </a>
                    </li>
                    @endif
                    @if($social['instagram'])
                    <li class="ml-4">
                        <a href="{{ $social['instagram'] }}" title="Instagram">
                            <svg class="fill-current text-gray-400 hover:text-white w-8" viewBox="0 0 16 18" fill="none"><g clip-path="url(#clip0)"><path d="M8.004 4.957c-2.272 0-4.104 1.804-4.104 4.04 0 2.235 1.832 4.039 4.104 4.039 2.271 0 4.103-1.804 4.103-4.04 0-2.235-1.832-4.039-4.103-4.039zm0 6.666c-1.468 0-2.668-1.178-2.668-2.627 0-1.448 1.196-2.626 2.668-2.626 1.471 0 2.667 1.178 2.667 2.626 0 1.449-1.2 2.627-2.667 2.627zm5.228-6.831a.948.948 0 01-.957.942.948.948 0 01-.957-.942.95.95 0 01.957-.942.95.95 0 01.957.942zm2.718.956c-.06-1.262-.354-2.38-1.293-3.301-.936-.921-2.071-1.21-3.353-1.273C9.982 1.1 6.02 1.1 4.7 1.174c-1.279.06-2.414.348-3.354 1.27-.939.92-1.228 2.038-1.292 3.3-.075 1.301-.075 5.2 0 6.5.06 1.263.353 2.381 1.292 3.302.94.921 2.072 1.21 3.354 1.273 1.321.074 5.282.074 6.604 0 1.282-.06 2.417-.348 3.353-1.273.936-.921 1.229-2.039 1.293-3.301.075-1.3.075-5.196 0-6.497zm-1.707 7.893a2.68 2.68 0 01-1.522 1.497c-1.053.412-3.553.317-4.717.317-1.165 0-3.668.091-4.718-.317a2.68 2.68 0 01-1.522-1.497c-.418-1.037-.321-3.498-.321-4.645 0-1.146-.093-3.61.321-4.644a2.68 2.68 0 011.522-1.497c1.053-.412 3.553-.317 4.718-.317 1.164 0 3.667-.091 4.717.317.7.274 1.24.805 1.522 1.497.418 1.037.321 3.498.321 4.644 0 1.147.097 3.611-.321 4.645z" /></g><defs><clipPath id="clip0"><path fill="#fff" d="M0 0h16v18H0z"/></clipPath></defs></svg>
                        </a>
                    </li>
                    @endif
                    @if($social['twitter'])
                    <li class="ml-4">
                        <a href="{{ $social['twitter'] }}" title="Twitter">
                            <svg class="fill-current text-gray-400 hover:text-white w-8" viewBox="0 0 18 18" fill="none"><path d="M6.382 15h-.06a8.152 8.152 0 01-3.487-.818 1.035 1.035 0 01-.585-1.08 1.057 1.057 0 01.87-.885 4.972 4.972 0 001.905-.667 7.117 7.117 0 01-2.633-6.803 1.058 1.058 0 01.75-.862 1.012 1.012 0 011.073.308 5.317 5.317 0 003.66 2.062A3.375 3.375 0 018.932 3.93a3.352 3.352 0 014.778.142.525.525 0 00.585.075 1.043 1.043 0 011.455 1.2 4.993 4.993 0 01-.96 1.95A8.093 8.093 0 016.382 15zm0-1.5h.06a6.592 6.592 0 006.818-6.442.99.99 0 01.277-.638c.183-.232.34-.483.465-.75a1.92 1.92 0 01-1.432-.638 1.836 1.836 0 00-1.32-.532 1.875 1.875 0 00-1.343.518 1.897 1.897 0 00-.54 1.814l.195.856-.877.06a6.225 6.225 0 01-4.905-1.8 5.34 5.34 0 002.797 4.845l.713.405-.473.675a4.216 4.216 0 01-2.01 1.44 6.25 6.25 0 001.568.187h.007z" /></svg>
                        </a>
                    </li>
                    @endif
                    @if ($actor['homepage'])
                    <li class="ml-4">
                        <a href="{{ $actor['homepage'] }}" title="Website">
                            <svg class="fill-current text-gray-400 hover:text-white w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"/></svg>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $actor['name'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-gray-400 hover:text-white w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd"/></svg>
                    <span class="ml-2">{{ $actor['birthday'] }} ({{ $actor['age'] }} years old) in {{ $actor['place_of_birth'] }}</span>
                </div>
                <p class="text-gray-300 mt-8">
                    {{ $actor['biography'] }}
                </p>

                <h4 class="font-semibold mt-12">Known For</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                    @foreach($knowForMovies as $movie)
                    <div class="mt-4">
                        <a href="{{ $movie['linkToPage'] }}">
                            <img src="{{ $movie['poster_path'] }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <a href="{{ $movie['linkToPage'] }}" class="text-sm leading-normal block text-gray-400 hover:text-white mt-1">{{ $movie['title'] }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> <!-- end movie-info -->
    <div class="credits border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Credits</h2>
            <ul class="list-disc leading-loose pl-5 mt-8">
                @foreach($credits as $credit)
                <li>{{ $credit['release_year'] }} &middot; <strong>{{ $credit['title'] }}</strong> as {{ $credit['character'] }}n</li>
                @endforeach
            </ul>
        </div>
    </div> <!-- end credits -->
@endsection
