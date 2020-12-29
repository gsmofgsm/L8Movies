<div class="relative mt-3 md:mt-0">
    <input wire:model.debouce.500ms="search" type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
    <div class="absolute top-0 mt-2 ml-2">
        <svg class="fill-current w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/></svg>
    </div>
    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-800 rounded w-64 mt-4">
            <ul>
                @forelse($searchResults as $result)
                    <li class="border-b border-gray-700">
                        <a href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700
                        px-3 py-3 flex items-center">
                            @if($result['poster_path'])
                                <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">
                            @else
                                <img src="http://via.placeholder.com/50x75" alt="poster" class="w-8">
                            @endif
                            <span class="ml-4">{{ $result['title'] }}</span>
                        </a>
                    </li>
                @empty
                    <li>No results for "{{ $search }}"</li>
                @endforelse
            </ul>
        </div>
    @endif
</div>
